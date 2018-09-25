<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 06/09/2018
 * Time: 19:37
 */


namespace App\Domain\Anuncios\UseCases\ModifyAnuncio;


use App\Domain\Anuncios\Domain\AnuncioDomain\Anuncio;
use App\Domain\Anuncios\Domain\AnuncioDomain\ComponentAlto;
use App\Domain\Anuncios\Domain\AnuncioDomain\ComponentAncho;
use App\Domain\Anuncios\Domain\AnuncioDomain\AnuncioId;
use App\Domain\Anuncios\Domain\AnuncioDomain\ComponentNombre;
use App\Domain\Anuncios\Domain\AnuncioDomain\ComponentPosicion;
use App\Domain\Anuncios\Domain\AnuncioDomain\AnuncioRepository;
use App\Domain\Anuncios\Domain\Component\ComponentRepository;
use App\IO\Events\EventPublisher;
use App\Domain\Anuncios\Domain\IState;
use App\Domain\Anuncios\Domain\States\StateValidator;
use Doctrine\Common\Collections\ArrayCollection;

class AnuncioModifier
{

    public function __construct(AnuncioRepository $anuncioRepository ,
                                ComponentRepository $componentsRepository,
                                \App\Domain\Anuncios\Domain\EventPublisher $eventPublisher)
    {
        $this->anuncioRepository = $anuncioRepository;
        $this->componentsRepository = $componentsRepository;
        $this->eventPublisher= $eventPublisher;
    }

    public function __invoke(
        AnuncioId $id,
        \App\Domain\Anuncios\Domain\States\State $anuncioState,
        ArrayCollection $components)
    {
        $anuncio=$this->anuncioRepository->findAnuncioById($id->uuidToString());
    
        $this->anuncioRepository->store($anuncio->modifyStatus(
            $anuncioState
        ));
       // $this->anuncioRepository->find($anuncio);
      //  $this->eventPublisher->publish($anuncio->getDomainEvents());

        $anuncioComponents = $anuncio->getAssocietComponents();
        foreach ($anuncioComponents as $component) {
            $this->componentsRepository->store($component);
        }
        
        $this->componentsRepository->finishStoreAnuncio();


    }

}