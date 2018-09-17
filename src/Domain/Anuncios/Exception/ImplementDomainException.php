<?php
    /**
     * Created by PhpStorm.
     * User: PTL-JGonzalez
     * Date: 13/09/2018
     * Time: 13:12
     */
    
    namespace App\Domain\Anuncios\Exception;
    
    
    use Exception;
    use Throwable;

    class ImplementDomainException extends Exception implements DomainExceptionInterface
    {
     
        
        private $class;
        private $domainException;
        
        public function __construct( string $class)
        {
            $this->class=$class;
            $this->domainException="Los campos introducidos son inválidos";
            parent::__construct($this->domainException, 404, null);
        }

        public function __toString() {
            return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
        }
        public function exception()
        {
            return $this->domainException;
        }
    
        public function class()
        {

            return $this->class;
        }
    
        public function code()
        {
            return parent::getCode();
        }
    }