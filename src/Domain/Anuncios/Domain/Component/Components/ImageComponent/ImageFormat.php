<?php
    /**
     * Created by PhpStorm.
     * User: PTL-JGonzalez
     * Date: 07/09/2018
     * Time: 10:32
     */
    
    namespace App\Domain\Anuncios\Domain\Component\Components\ImageComponent;
    
    
    use function in_array;

    class ImageFormat
    {
        private const IMAGE_FORMAT = array('jpg','png');
        
        private $format;
        public function __construct($format)
        {
            
            $this->format = $this->guard($format);
            
        }
    
        private function guard($format){
            
            if(in_array($format,$this::IMAGE_FORMAT)){
                return $format;
            }
            /**TODO NEW EXCEPTION */
        }
    }