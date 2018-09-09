<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 06/09/2018
 * Time: 19:37
 */


namespace App\Domain\Anuncios\UseCases\Create;


use App\Domain\Anuncios\Domain\AnuncioDomain\Anuncio;
use App\Domain\Anuncios\Domain\AnuncioDomain\AnuncioAlto;
use App\Domain\Anuncios\Domain\AnuncioDomain\AnuncioAncho;
use App\Domain\Anuncios\Domain\AnuncioDomain\AnuncioId;
use App\Domain\Anuncios\Domain\AnuncioDomain\AnuncioNombre;
use App\Domain\Anuncios\Domain\AnuncioDomain\AnuncioPosicion;
use App\Domain\Anuncios\Domain\AnuncioDomain\AnuncioRepository;
use App\Domain\Anuncios\Domain\AnuncioDomain\UuidAnuncio;
use App\Domain\Anuncios\Domain\Component\Component;
use App\Domain\Anuncios\Domain\Component\ComponenteValidator;
use App\Domain\Anuncios\Domain\IState;
use App\Domain\Anuncios\Domain\States\StateValidator;

class AnuncioCreator
{

    public function __construct(AnuncioRepository $anuncioRepository)
    {
        $this->anuncioRepository = $anuncioRepository;

    }

    public function __invoke(
        AnuncioId $id,
        AnuncioNombre $anuncioNombre,
        AnuncioPosicion $anuncioPosicion,
        AnuncioAlto $anuncioAlto,
        AnuncioAncho $anuncioAncho,
        \App\Domain\Anuncios\Domain\States\IState $anuncioState,
        Component $anuncioComponente)
    {
        Anuncio::createAnuncio(
            $id,
            $anuncioNombre,
            $anuncioPosicion,
            $anuncioAncho,
            $anuncioAlto,
            $anuncioState,
            $anuncioComponente
        );


    }

}