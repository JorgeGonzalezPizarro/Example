<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 06/09/2018
 * Time: 19:32
 */
    namespace api\controller;

use http\Env\Request as Request;
use App\Domain\Anuncios\UseCases\CreateAnuncio\CreateAnuncioHandler;
use App\Domain\Anuncios\UseCases\CreateAnuncio\AuncioCreateCommand;


class AnuncioController
{
    
    

    public function __construct(Request $request)
    {
        $this->request=$request;
        $this->postAnuncio($request);
    }

    public function __invoke($request){
        echo "aa";
        $anuncioHandler = new CreateAnuncioHandler();
        
        $anuncioHandler->invoke(new AuncioCreateCommand($request));


    }


}