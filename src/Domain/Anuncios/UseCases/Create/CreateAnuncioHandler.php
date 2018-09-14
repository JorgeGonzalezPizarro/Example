<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 06/09/2018
 * Time: 19:34
 */

namespace App\Domain\Anuncios\UseCases\Create;


use App\Domain\Anuncios\Domain\AnuncioDomain\ComponentAlto;
use App\Domain\Anuncios\Domain\AnuncioDomain\ComponentAncho;
use App\Domain\Anuncios\Domain\AnuncioDomain\AnuncioId;
use App\Domain\Anuncios\Domain\AnuncioDomain\ComponentNombre;
use App\Domain\Anuncios\Domain\AnuncioDomain\ComponentPosicion;
use App\Domain\Anuncios\Domain\AnuncioDomain\Uuid;
use App\Domain\Anuncios\Domain\Component\ComponenteValidator;
use App\Domain\Anuncios\Domain\Component\Components\ArrayComponents;
use App\Domain\Anuncios\Domain\States\StateValidator;
use Doctrine\Common\Collections\ArrayCollection;

class CreateAnuncioHandler
{

    private $anuncioCreator;

    public function __construct(AnuncioCreator $anuncioCreator)

    {
        $this->anuncioCreator = $anuncioCreator;
    }

    public function handle(AnuncioCommand $anuncioCommand)
    {
        
        $componentsList = new ArrayComponents();
        $anuncioId= new AnuncioId();
        foreach($anuncioCommand->getAnuncioComponents() as $component){
            $componentsList->add($component);
        }
        
        
        
        $state = StateValidator::fromRequest($anuncioCommand->getAnuncioState());
        $this->anuncioCreator->__invoke(
            $anuncioId,
            $state,
            $componentsList);


    }


}