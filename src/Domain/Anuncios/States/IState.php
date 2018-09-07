<?php
    /**
     * Created by PhpStorm.
     * User: PTL-JGonzalez
     * Date: 07/09/2018
     * Time: 9:04
     */
    namespace App\Domain\Anuncios\Domain;
    use App\Domain\Anuncios;
    
    interface IState
    {
        public  const status = array('PUBLISH','PUBLISHING','STOP');
        public function publish();
        public function stop();
        public function publishing();
        public function getStatus();
        
    }