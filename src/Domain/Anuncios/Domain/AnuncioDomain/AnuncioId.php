<?php
/**
 * Created by PhpStorm.
 * User: Jorge Gonzalez
 * Date: 06/09/2018
 * Time: 20:22
 */

namespace App\Domain\Anuncios\Domain\AnuncioDomain;


class AnuncioId
{

    private $anuncioId;
    public function __construct()
    {
        $this->anuncioId = $this->generateUuid();
    }

    public static function generateUuid(){
        
        return \App\IO\UuidGenerator\UUid::generateUuid();
        
    }
    
    public  function uuidToString(){
    
       return $this->anuncioId->toString();
    }
    
    public function __toString()
    {
        return $this->anuncioId->toString();
    }
    
}