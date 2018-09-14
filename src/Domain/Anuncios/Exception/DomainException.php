<?php
    /**
     * Created by PhpStorm.
     * User: PTL-JGonzalez
     * Date: 13/09/2018
     * Time: 14:44
     */
    
    namespace App\Domain\Anuncios\Exception;
    
    
    interface DomainException
    {
        public function exception();
        public function class();
        public function code();
    }