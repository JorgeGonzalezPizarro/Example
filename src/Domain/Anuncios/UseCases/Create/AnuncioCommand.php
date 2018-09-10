<?php
/**
 * Created by PhpStorm.
 * User: PTL-JGonzalez
 * Date: 07/09/2018
 * Time: 9:16
 */


namespace App\Domain\Anuncios\UseCases\Create;

use http\Env\Request;
use Symfony\Component\HttpFoundation\ParameterBag;

class AnuncioCommand
{
    private $anuncioComponents;
    private $anuncioState;


    public function __construct(\Symfony\Component\HttpFoundation\Request $request)
    {
        $this->request = $request;
        $this->anuncioComponents = $request->get('components');
        $this->anuncioState = $request->get('state');
    }

    /**
     * @return mixed
     */
    public function getAnuncioComponents()
    {
        return $this->anuncioComponents;
    }

    /**
     * @return mixed
     */
    public function getAnuncioState()
    {
        return $this->anuncioState;
    }



    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return Request
     */
    public function getRequest(): Request
    {
        return $this->request;
    }


}