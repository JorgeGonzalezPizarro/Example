<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 06/09/2018
 * Time: 19:13
 */
    
    namespace App\Domain\Anuncios\Domain\AnuncioDomain;


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
    
    public function __construct(UUid $id , AnuncioNombre $anuncioNombre, AnuncioPosicion $anuncioPosicion, AnunciAlto $anuncioAlto,AnuncioState $anuncioState, AnuncioAncho $anuncioAncho, AnuncioComponente $anuncioComponente)
    {
        $this->id=$id;
        $this->anuncioNombre =$anuncioNombre;
        $this->anuncioPosicion=$anuncioPosicion;
        $this->anuncioAncho=$anuncioAncho;
        $this->anuncioAlto=$anuncioAlto;
        $this->anuncioComponente=$anuncioComponente;
        $this->anuncioState=$anuncioState;
    }
    
    
    












}