<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 06/09/2018
 * Time: 19:13
 */

namespace App\Domain\Anuncios\Domain\AnuncioDomain;


use App\Domain\Anuncios\Domain\Component\Component;
use App\Domain\Anuncios\Domain\States\IState;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="product")
 */
class Anuncio
{


    
    /**
     * @var AnuncioId
     */
    private $id;
    /**
     * @var string
     */
    private $anuncioComponents;
    /**
     * @var string
     */
    private $anuncioState;
    
    /**
     * Anuncio constructor.
     * @param AnuncioId $id
     * @param IState $anuncioState
     * @param ArrayCollection $anuncioComponents
     */
    public function __construct(AnuncioId $id,
                                IState $anuncioState,
                                ArrayCollection $anuncioComponents)
    {
        $this->id = $id;
        $this->anuncioComponents = $anuncioComponents;
        $this->anuncioState = $anuncioState;
    }
    
    /**
     * @param AnuncioId $id
     * @param IState $anuncioState
     * @param ArrayCollection $anuncioComponente
     * @return Anuncio
     */
    public static function createAnuncio(AnuncioId $id,
                                         IState $anuncioState,
                                         ArrayCollection $anuncioComponente)
    {
        return new self(
            $id,
            $anuncioState,
            $anuncioComponente);
    }


}