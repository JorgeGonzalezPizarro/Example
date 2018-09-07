<?php
/**
 * Created by PhpStorm.
 * User: Jorge Gonzalez
 * Date: 06/09/2018
 * Time: 20:22
 */
    namespace App\Domain\Anuncios\Domain\AnuncioDomain;



class AnuncioPosicion
{

    public function __construct($posicion)
    {
        
        $this->setX=$this->setX();
        $this->setY=$this->setY();
        $this->setZ=$this->setZ();
    }
    
    
    
    private function setX($posicion){
        $eje='x';
       return  $this->guard($posicion,$eje);
    }
    
    private function setY($posicion){
        $eje='y';
        return $this->guard($posicion,$eje);
    }
    private function setZ($posicion){
        $eje='z';
       return $this->guard($posicion,$eje);
        
    }
    
    
    
    
    private function guard($posicion,$eje){
        if(!in_array($posicion,$eje)){
            /**todo exception*/
        }
        if(!is_int($posicion[$eje])){
            
            return (int) $posicion[$eje];
        }
        
    }
}