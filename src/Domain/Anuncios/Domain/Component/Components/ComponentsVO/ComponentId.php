<?php
    /**
     * Created by PhpStorm.
     * User: PTL-JGonzalez
     * Date: 12/09/2018
     * Time: 8:38
     */
    
    namespace App\Domain\Anuncios\Domain\Component\Components\ComponentsVO;
    
    
    use App\Domain\Anuncios\Domain\AnuncioDomain\AnuncioId;
    use App\Domain\Anuncios\Domain\AnuncioDomain\Uuid;

    class ComponentId
    {
    
        private $componentId;
        public function __construct()
        {
          $this->componentId=  $this->generateUUid();
        
        
        }
    
       public static function generateUUid(){
       
            return \App\IO\UuidGenerator\UUid::generateUuid();
       }
    
        public  function uuidToString(){
        
            return $this->componentId->toString();
        }

        public function __toString()
        {
            return (string)$this->uuidToString();
        }
    
    }