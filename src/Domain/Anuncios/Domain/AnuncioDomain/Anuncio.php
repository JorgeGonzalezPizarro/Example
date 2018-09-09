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

class Anuncio
{

//    private const ANUNCIO_STATUS_PUBLISH='Published';
//    private const ANUNCIO_STATUS_STOPPED='Stopped';
//    private const ANUNCIO_STATUS_PUBLISHING='Publishing';

    private $anuncioNombre;
    private $anuncioPosicion;
    private $anuncioAncho;
    private $anuncioAlto;
    private $anuncioComponente;
    private $anuncioState;

    public function __construct(AnuncioId $id,
                                AnuncioNombre $anuncioNombre,
                                AnuncioPosicion $anuncioPosicion,
                                AnuncioAncho $anuncioAncho,
                                AnuncioAlto $anuncioAlto,
                                IState $anuncioState,
                                Component $anuncioComponente)
    {
        $this->id = $id;
        $this->anuncioNombre = $anuncioNombre;
        $this->anuncioPosicion = $anuncioPosicion;
        $this->anuncioAncho = $anuncioAncho;
        $this->anuncioAlto = $anuncioAlto;
        $this->anuncioComponente = $anuncioComponente;
        $this->anuncioState = $anuncioState;
    }

    public static function createAnuncio(AnuncioId $id,
                                         AnuncioNombre $anuncioNombre,
                                         AnuncioPosicion $anuncioPosicion,
                                         AnuncioAncho $anuncioAncho,
                                         AnuncioAlto $anuncioAlto,
                                         IState $anuncioState,
                                         Component $anuncioComponente)
    {
        return new self($id,
            $anuncioNombre,
            $anuncioPosicion,
            $anuncioAncho,
            $anuncioAlto,
            $anuncioState,
            $anuncioComponente);
    }


}