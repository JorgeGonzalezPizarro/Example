<?php
/**
 * Created by PhpStorm.
 * User: Jorge Gonzalez
 * Date: 06/09/2018
 * Time: 20:22
 */
    
    namespace App\Domain\Anuncios\Domain\AnuncioDomain;


class AnuncioAlto
{
    
    
    public function __construct($anuncioAlto)
    {
        $this->anuncioAlto=$this->setAnuncioAncho($anuncioAlto);
        
        
    }
    
    private function setAnuncioAlto($anuncioAncho){
        
        $anuncioAncho= $this->guard($anuncioAncho);
        return $anuncioAncho;
        
    }
    
    private function guard($anuncioAlto){
        
        if(!is_string($anuncioAlto)){
            $anuncioAlto =(int) $anuncioAlto;
        }
        
        if($anuncioAlto<1){
            /**TODO NEW EXCEPTIO **/
            
        }
        return $anuncioAlto;
    }
    
}