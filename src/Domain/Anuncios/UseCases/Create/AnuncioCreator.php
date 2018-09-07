<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 06/09/2018
 * Time: 19:37
 */
    
    
    namespace App\Domain\Anuncios\UseCases\Create;


class AnuncioCreator
{

    public function __construct(AnuncioRepository $anuncioRepository)
    {
        $this->anuncioRepository=$anuncioRepository;
    
    }
    
    public function __invoke(
        UUid $id ,
        AnuncioNombre $anuncioNombre,
        AnuncioPosicion $anuncioPosicion,
        AnunciAlto $anuncioAlto,AnuncioState
        $anuncioState, AnuncioAncho $anuncioAncho,
        AnuncioComponente $anuncioComponente)
    {
    
    
    
    }
    
}