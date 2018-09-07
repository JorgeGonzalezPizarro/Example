<?php
    /**
     * Created by PhpStorm.
     * User: PTL-JGonzalez
     * Date: 07/09/2018
     * Time: 10:37
     */
    
    namespace App\Domain\Anuncios\Domain\Component\Components\VideoComponent;
    
    
    use function is_int;

    class VideoWeight
    {
     
     
        private $weight;
        public function __construct($weight)
        {
            $this->weight=$this->guard($weight);
            
        }
        
        private function guard($weight){
            
            if(!is_int($weight)){
                $weight = (int)$weight;
            }
            if($weight < 0 ){
                /* TODO NEW EXCEPTION */
            }
            return $weight;
            
        }
    
    
    }