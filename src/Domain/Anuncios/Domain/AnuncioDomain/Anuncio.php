<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 06/09/2018
 * Time: 19:13
 */

namespace App\Domain\Anuncios\Domain\AnuncioDomain;


use App\Domain\Anuncios\Domain\AgregateRoot;
use App\Domain\Anuncios\Domain\Component\Component;
use App\Domain\Anuncios\Domain\Component\ComponenteValidator;
use App\Domain\Anuncios\Domain\Component\Components\ArrayComponents;
use App\Domain\Anuncios\Domain\States\State;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\EventDispatcher\EventDispatcher;

/**
 * @ORM\Entity
 * @ORM\Table(name="Anuncio")
 */
class Anuncio extends AgregateRoot
{



    private $anuncioId;

    private $anuncioComponents;

    private $anuncioState;
    
    /**
     * Anuncio constructor.
     * @param AnuncioId $id
     * @param State $anuncioState
     * @param ArrayCollection $anuncioComponents
     */
    public function __construct(AnuncioId $id,
                                State $anuncioState,
                                ArrayCollection $anuncioComponents)
    {
        $this->anuncioId = $id->uuidToString();
        $this->anuncioState = $anuncioState;
        $this->anuncioComponents=$this->agreggateComponents($anuncioComponents);

//        $this->saveDomainEvent(new AnuncioWasCreatedEvent($this->anuncioId,
//                                array('state' => $this->anuncioState , "components" => $anuncioComponents->toArray())));

        $eventDispatcher = new EventDispatcher();
    
    }
    
    /**
     * @param AnuncioId $id
     * @param State $anuncioState
     * @param ArrayCollection $anuncioComponente
     * @return Anuncio
     */
    public static function createAnuncio(AnuncioId $id,
                                         State $anuncioState,
                                         ArrayComponents $anuncioComponents)
    {
        
        return new self(
            $id,
            $anuncioState,
            $anuncioComponents);
        
    }
    
    
    private function agreggateComponents(ArrayComponents $anuncioComponents)
    {
    
    
        if (!$this->guardExistsComponents($anuncioComponents)) {
            return $anuncioComponents;
        }
        $componentsCreated = new ArrayComponents();
        foreach ($anuncioComponents->toArray() as $component) {
            $componentsCreated->addComponentIfExist(ComponenteValidator::typeComponent($this->anuncioId, $component));
        }
    
        return  $componentsCreated;
        }
    
    private function guardExistsComponents(ArrayComponents $anuncioComponents){
        
        if(empty($anuncioComponents->toArray())){
            return false;
        }
        return true;
        
    }
    
    public function getAssocietComponents()
    {
        if (!empty($this->getComponentsAsArray())) {
            return $this->getComponentsAsArray();
        }
    
        return new ArrayComponents();
    }
    private function getComponentsAsArray(){
        
        return $this->anuncioComponents->toArray();
        
    }
    
    
    public  function modifyStatus(State $anuncioState){
        
            return $this->anuncioState->$anuncioState();
    
    }
    
    
    
}