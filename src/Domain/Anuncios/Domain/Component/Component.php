<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 06/09/2018
 * Time: 19:20
 */

namespace App\Domain\Anuncios\Domain\Component;


use App\Domain\Anuncios\Domain\Component\Components\ComponentsVO\ComponentId;
use App\Domain\Anuncios\Domain\Component\Components\ComponentsVO\TypeId;

abstract class Component
{
    
    protected  $componentId;
    protected  $ancho;
    protected  $alto;
    protected  $nombre;
    protected  $position;
    protected  $anuncioId;
    protected abstract static function constructComponent($anuncioId,$componente);


    
    public static function createComponent($anuncioId,$componentType, $componentObject)
    {
        $component = __NAMESPACE__ . '\Components\\' . $componentType;
        $componentId=new ComponentId();
        $componentObject['id']=$componentId;
        return $component::constructComponent($anuncioId,$componentObject);
    }
    public abstract function getAnuncioId();
    public abstract function setAnuncioId($anuncioId);
    public abstract function getComponent();
    public abstract function getComponentId();
    public abstract function setComponentId($componentId);
    public abstract function getAncho();
    public abstract function getAlto();
    public abstract function getComponentPosition();
    public abstract function getNombre();
    public abstract function setNombre($nombre);
    public abstract function setAncho($ancho);
    public abstract function setAlto($alto);
    public abstract function setComponentPosition($position);
    
    
}