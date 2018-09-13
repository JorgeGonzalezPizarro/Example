<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 06/09/2018
 * Time: 19:53
 */


namespace App\Domain\Anuncios\Domain\Component;

use Symfony\Component\Finder\Finder;

class ComponenteValidator
{

    public function __construct($component)
    {


    }
    

    public static function typeComponent($anuncioId,$component)
    {
        $type = $component['type'];
        $path = "Component";
        $class = $path . $type;
        try {
            return Component::createComponent($anuncioId,$class, $component);
        } catch (\Exception $exception) {
        }
    }

}