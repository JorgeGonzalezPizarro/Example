<?php
/**
 * Created by PhpStorm.
 * User: PTL-JGonzalez
 * Date: 07/09/2018
 * Time: 10:50
 */


namespace App\Domain\Anuncios\Domain\AnuncioDomain;

    interface AnuncioRepository
    {
        public function exists($id);

        public function store($anuncio);
        
        public function storeAnuncioWithComponents($anuncio,$components);

    }