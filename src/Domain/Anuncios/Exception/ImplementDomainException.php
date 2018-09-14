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

    class ImplementDomainException extends Exception implements DomainException
    {
     
        
        private $class;
        private $domainException;
        
        public function __construct(string $message = "", int $code = 0, Throwable $previous = NULL , string $class)
        {
            $this->class=$class;
            $this->domainException=$message;
            parent::__construct($message, $code, $previous);
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