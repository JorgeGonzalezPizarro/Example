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

class Anuncio
{

//    private const ANUNCIO_STATUS_PUBLISH='Published';
//    private const ANUNCIO_STATUS_STOPPED='Stopped';
//    private const ANUNCIO_STATUS_PUBLISHING='Publishing';


    private $anuncioComponents;
    private $anuncioState;

    public function __construct(AnuncioId $id,
                                IState $anuncioState,
                                ArrayCollection $anuncioComponents)
    {
        $this->id = $id;
        $this->anuncioComponents = $anuncioComponents;
        $this->anuncioState = $anuncioState;
    }

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