<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 06/09/2018
 * Time: 19:20
 */

namespace App\Domain\Anuncios\Domain\Component;


abstract class Component
{

    protected abstract function constructComponent(Componente $componente);


    public static function createComponent($componente){

        return new $componente;
    }




}