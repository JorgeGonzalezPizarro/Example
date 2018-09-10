<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 06/09/2018
 * Time: 19:34
 */

namespace App\Domain\Anuncios\UseCases\Create;


use App\Domain\Anuncios\Domain\Anuncio\_;
use App\Domain\Anuncios\Domain\AnuncioDomain\ComponentAlto;
use App\Domain\Anuncios\Domain\AnuncioDomain\ComponentAncho;
use App\Domain\Anuncios\Domain\AnuncioDomain\AnuncioId;
use App\Domain\Anuncios\Domain\AnuncioDomain\ComponentNombre;
use App\Domain\Anuncios\Domain\AnuncioDomain\ComponentPosicion;
use App\Domain\Anuncios\Domain\AnuncioDomain\UuidAnuncio;
use App\Domain\Anuncios\Domain\Component\ComponenteValidator;
use App\Domain\Anuncios\Domain\Component\Components\ArrayComponents;
use App\IO\UuidGenerator\UUid;
use App\Domain\Anuncios\Domain\States\StateValidator;
use Doctrine\Common\Collections\ArrayCollection;
use http\Env\Request;
use App\Domain\Anuncios\Domain\Anuncio\AnuncioState;

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
        foreach($anuncioCommand->getAnuncioComponents() as $component){
            $componentsList->add(ComponenteValidator::typeComponent($component));
        }
        
        
        $state = StateValidator::fromRequest($anuncioCommand->getAnuncioState());
        $this->anuncioCreator->__invoke(
            new AnuncioId(new UUid()),
            $state,
            $componentsList);


    }


}