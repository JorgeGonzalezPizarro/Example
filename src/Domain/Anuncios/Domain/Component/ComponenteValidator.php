<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 06/09/2018
 * Time: 19:53
 */


namespace App\Domain\Anuncios\Domain\Component;

use App\Domain\Anuncios\Exception\ExceptionDomain;
use App\Domain\Anuncios\Exception\ExceptionDomainPublisher;
use App\Domain\Anuncios\Exception\ImplementDomainException;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\Finder\Finder;
use Throwable;

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
            return Component::createComponent($anuncioId,$class, $component);
        
            
            
      
    }

}