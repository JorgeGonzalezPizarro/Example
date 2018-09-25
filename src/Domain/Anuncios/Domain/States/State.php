<?php
/**
 * Created by PhpStorm.
 * User: PTL-JGonzalez
 * Date: 07/09/2018
 * Time: 9:04
 */

namespace App\Domain\Anuncios\Domain\States;

abstract class State
{
    public abstract function publish();

    public abstract function stop();

    public abstract function publishing();

    public abstract function getStatus();
    
   public function __toString()
   {
       return $this->getStatus();

   }
    
}