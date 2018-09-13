<?php
/**
 * Created by PhpStorm.
 * User: PTL-JGonzalez
 * Date: 07/09/2018
 * Time: 10:50
 */


namespace App\Domain\Anuncios\Domain\Component;

    interface ComponentRepository
    {
        public function exists($id);

        public function store($component);
        public function finishStoreAnuncio();

        
    }