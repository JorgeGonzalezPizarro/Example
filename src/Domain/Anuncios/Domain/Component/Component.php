<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 06/09/2018
 * Time: 19:20
 */

namespace App\Domain\Anuncios\Domain\Component;


use App\Domain\Anuncios\Domain\Component\Components\ComponentFile;

abstract class Component
{

    protected abstract static function constructComponent($componente);


    public static function createComponent($componentType, $componentObject)
    {
        $component = __NAMESPACE__ . '\Components\\' . $componentType;
        return $component::constructComponent($componentObject);

    }

    public abstract function getComponent();


}