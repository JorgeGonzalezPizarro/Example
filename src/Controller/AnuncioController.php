<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 06/09/2018
 * Time: 19:32
 */
    namespace api\controller;
namespace App\Controller;
use App\Domain\Anuncios\UseCases\Create\AnuncioCommand;
use http\Env\Request as Request;
use App\Domain\Anuncios\UseCases\Create\CreateAnuncioHandler;
use App\Domain\Anuncios\UseCases\Create\AuncioCreateCommand;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\Route;

class AnuncioController extends Controller
{
    

    public function __construct(RequestStack $request)
    {
        $this->request=$request->pop();
        $this->__invoke($request);
    }

    public function __invoke($request){
        echo "aa";
        $command = new AnuncioCommand($this->request);
        $anuncioHandler = new CreateAnuncioHandler();
    
        $anuncioHandler->invoke($command);
    
    
        // $anuncioHandler->invoke(new AuncioCreateCommand($request));


    }


}