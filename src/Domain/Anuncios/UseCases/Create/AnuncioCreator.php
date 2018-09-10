<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 06/09/2018
 * Time: 19:37
 */


namespace App\Domain\Anuncios\UseCases\Create;


use App\Domain\Anuncios\Domain\AnuncioDomain\Anuncio;
use App\Domain\Anuncios\Domain\AnuncioDomain\ComponentAlto;
use App\Domain\Anuncios\Domain\AnuncioDomain\ComponentAncho;
use App\Domain\Anuncios\Domain\AnuncioDomain\AnuncioId;
use App\Domain\Anuncios\Domain\AnuncioDomain\ComponentNombre;
use App\Domain\Anuncios\Domain\AnuncioDomain\ComponentPosicion;
use App\Domain\Anuncios\Domain\AnuncioDomain\AnuncioRepository;
use App\Domain\Anuncios\Domain\AnuncioDomain\UuidAnuncio;
use App\Domain\Anuncios\Domain\Component\Component;
use App\Domain\Anuncios\Domain\Component\ComponenteValidator;
use App\Domain\Anuncios\Domain\IState;
use App\Domain\Anuncios\Domain\States\StateValidator;
use Doctrine\Common\Collections\ArrayCollection;

class AnuncioCreator
{

    public function __construct(AnuncioRepository $anuncioRepository)
    {
        $this->anuncioRepository = $anuncioRepository;

    }

    public function __invoke(
        AnuncioId $id,
        \App\Domain\Anuncios\Domain\States\IState $anuncioState,
        ArrayCollection $components)
    {
        Anuncio::createAnuncio(
            $id,
           
            $anuncioState,
            $components
        );


    }

}