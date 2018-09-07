<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 06/09/2018
 * Time: 19:34
 */
    
    namespace App\Domain\Anuncios\UseCases\Create;


use App\Domain\Anuncios\Domain\Anuncio\_;
use App\Domain\Anuncios\Domain\Anuncio\AnuncioAncho;
use App\Domain\Anuncios\Domain\Anuncio\AnuncioNombre;
use App\Domain\Anuncios\Domain\Anuncio\AnuncioPosicion;
use App\Domain\Anuncios\Domain\Component\Components\Component;
use App\Domain\Anuncios\Domain\Component\Components\ComponenteValidator;
use App\IO\UuidGenerator\UUid;
use http\Env\Request;
use App\Domain\Anuncios\Domain\Anuncio\AnuncioState;
class CreateAnuncioHandler
{

    private $anuncioCreator;
    public function __construct(AnuncioCreator $anuncioCreator)

    {
        $this->anuncioCreator=$anuncioCreator;
    }

    public function __invoke(Request $request)
    {

     $this->anuncioCreator->__invoke(
            new UUid(),
            new AnuncioNombre($this->request->anuncioNombre),
            new AnuncioPosicion($this->request->anuncioPosicion),
            new AnuncioAncho($this->request->anuncioPosicion),
            new AnuncioAlto($this->request->anuncioAlto),
            new AnuncioState($this->request->anuncioAlto),
             new ComponenteValidator($this->request->component)
        );

    }


}