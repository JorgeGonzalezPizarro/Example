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

    public function __construct(UuIdAnuncio $uuIdAnuncio)
    {
        $this->UuidAnuncio=$uuIdAnuncio;
        $this->idAnuncio=$this->generateIdAnuncio();


    }
    private function generateIdAnuncio(){

        $this->UuidAnuncio->generateUuid();


    }
}