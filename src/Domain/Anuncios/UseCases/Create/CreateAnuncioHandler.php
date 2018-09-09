<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 06/09/2018
 * Time: 19:34
 */

namespace App\Domain\Anuncios\UseCases\Create;


use App\Domain\Anuncios\Domain\Anuncio\_;
use App\Domain\Anuncios\Domain\AnuncioDomain\AnuncioAlto;
use App\Domain\Anuncios\Domain\AnuncioDomain\AnuncioAncho;
use App\Domain\Anuncios\Domain\AnuncioDomain\AnuncioId;
use App\Domain\Anuncios\Domain\AnuncioDomain\AnuncioNombre;
use App\Domain\Anuncios\Domain\AnuncioDomain\AnuncioPosicion;
use App\Domain\Anuncios\Domain\AnuncioDomain\UuidAnuncio;
use App\Domain\Anuncios\Domain\Component\ComponenteValidator;
use App\IO\UuidGenerator\UUid;
use App\Domain\Anuncios\Domain\States\StateValidator;
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
        $component = ComponenteValidator::typeComponent($anuncioCommand->getAnuncioComponente());
        $state = StateValidator::fromRequest($anuncioCommand->getAnuncioState());
        $this->anuncioCreator->__invoke(
            new AnuncioId(new UUid()),
            new AnuncioNombre($anuncioCommand->getAnuncioNombre()),
            new AnuncioPosicion($anuncioCommand->getAnuncioPosicion()),
            new AnuncioAlto($anuncioCommand->getAnuncioAlto()),
            new AnuncioAncho($anuncioCommand->getAnuncioAncho()),
            $state,
            $component);


    }


}