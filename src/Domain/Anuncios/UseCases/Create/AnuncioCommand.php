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
    private $anuncioNombre;
    private $anuncioPosicion;
    private $anuncioAncho;
    private $anuncioAlto;
    private $anuncioComponente;
    private $anuncioState;


    public function __construct(\Symfony\Component\HttpFoundation\Request $request)
    {
        $this->request = $request;
        $this->anuncioNombre = $request->get('nombre');
        $this->anuncioPosicion = $request->get('posicion');
        $this->anuncioAncho = $request->get('ancho');
        $this->anuncioAlto = $request->get('alto');
        $this->anuncioComponente = $request->get('componente');
        $this->anuncioState = $request->get('state');
    }

    /**
     * @return mixed
     */
    public function getAnuncioComponente()
    {
        return $this->anuncioComponente;
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
    public function getAnuncioAlto()
    {
        return $this->anuncioAlto;
    }

    /**
     * @return mixed
     */
    public function getAnuncioAncho()
    {
        return $this->anuncioAncho;
    }


    /**
     * @return mixed
     */
    public function getAnuncioNombre()
    {
        return $this->anuncioNombre;
    }

    /**
     * @return mixed
     */
    public function getAnuncioPosicion()
    {
        return $this->anuncioPosicion;
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