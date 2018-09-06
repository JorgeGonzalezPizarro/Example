<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 06/09/2018
 * Time: 19:34
 */

namespace App\Domain\Anuncios\UseCases\Create;


use App\Domain\Anuncios\Domain\Anuncio;
use App\Domain\Anuncios\Domain\Component\Components\Component;
use App\Domain\Anuncios\Domain\Component\Components\ComponenteValidator;
use Doctrine\ORM\Id\UuidGenerator;
use http\Env\Request;

class CreateAnuncioHandler
{

    private $anuncio;
    public function __construct(Request $request)
    {
        $this->request=$request;
    }

    private function __invoke(Request $request)
    {
        //$this->validateAnuncio();

        AnuncioCreator::createFromRequest(
            new AnuncioNombre($this->request->anuncioNombre),
            new AnuncioPosicion($this->request->anuncioPosicion),
            new AnuncioPosicion($this->request->anuncioPosicion),
            new AnuncioAlto($this->request->anuncioAlto),
            new ComponenteValidator($this->request->component)
        );

    }


}