<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 06/09/2018
 * Time: 19:53
 */

namespace App\Domain\Anuncios\Domain\Component\Components;


class ComponenteValidator
{

    public function __construct($componentType)
    {
        $this->componentType=$componentType;
        $this->pathClass="Component";
        
    }

    public function __invoke()
    {
        if(class_exists($this->pathClass.$this->componentType)){
            return Component::createComponent($this->pathClass.$this->componentType);

        }
        
        /**TODO exception */
    }

}