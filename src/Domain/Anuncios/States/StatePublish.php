<?php
    /**
     * Created by PhpStorm.
     * User: PTL-JGonzalez
     * Date: 07/09/2018
     * Time: 9:08
     */
    
    namespace App\Domain\Anuncios\Domain\States;
    
    
    use IState;

    class StatePublish implements IState
    {
        private const STATE='PUBLISH';
        
        public function publish()
        {

           // return $this;
        }
    
        public function stop()
        {
            return new StateInterfaceStop();
        }
    
        public function publishing()
        {
            /* TODO EXCEPTION */
        }
    
        public function getStatus()
        {
            return $this::STATE;
        }
    }