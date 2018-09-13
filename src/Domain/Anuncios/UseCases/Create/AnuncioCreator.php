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
use App\Domain\Anuncios\Domain\AnuncioDomain\ComponentRepository;
use App\Domain\Anuncios\Domain\AnuncioDomain\Uuid;
use App\Domain\Anuncios\Domain\Component\Component;
use App\Domain\Anuncios\Domain\Component\ComponenteValidator;
use App\Domain\Anuncios\Domain\Component\Components\ArrayComponents;
use App\Domain\Anuncios\Domain\IState;
use App\Domain\Anuncios\Domain\States\StateValidator;
use Doctrine\Common\Collections\ArrayCollection;

class AnuncioCreator
{

    public function __construct(AnuncioRepository $anuncioRepository , \App\Domain\Anuncios\Domain\Component\ComponentRepository $componentsRepository)
    {
        $this->anuncioRepository = $anuncioRepository;
        $this->componentsRepository = $componentsRepository;

    }

    public function __invoke(
        AnuncioId $id,
        \App\Domain\Anuncios\Domain\States\State $anuncioState,
        ArrayCollection $components)
    {
        $anuncio = Anuncio::createAnuncio(
            $id,
            $anuncioState,
            $components
        );
        $this->anuncioRepository->store($anuncio);
        $components = $anuncio->getAssocietComponents();
        foreach ($components as $component) {
            $this->componentsRepository->store($component);
        }
        
        $this->componentsRepository->finishStoreAnuncio();
    }

}