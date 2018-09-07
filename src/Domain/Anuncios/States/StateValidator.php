<?php
    /**
     * Created by PhpStorm.
     * User: PTL-JGonzalez
     * Date: 07/09/2018
     * Time: 9:42
     */
    
    namespace App\Domain\Anuncios\Domain\States;
    
    
    use function in_array;

    class StateValidator
    {
     
        public function __construct($status)
        {
        
        $this->status=$status;
        $this->path="State";
        }
        
        private function validator(){
            
            if(!in_array($this->status,StateInterface::status))
            {
                /**TODO IMPLEMENT EXCEPTION */
                
            }
            return new $this->path.$this->status;
            
        }
    
    
    }