<?php
    /**
     * Created by PhpStorm.
     * User: PTL-JGonzalez
     * Date: 13/09/2018
     * Time: 13:18
     */
    
    namespace App\Domain\Anuncios\Exception;
    
    
    use Exception;
    use Symfony\Component\EventDispatcher\Event;
    use Symfony\Component\EventDispatcher\EventDispatcher;
    use Symfony\Component\HttpFoundation\JsonResponse;

    class ExceptionDomainListener
    {
    
        
        public  function onDomainException(DomainException $domainException)
        {
    
            $exceptionClass=$domainException->class();
            $exceptionMessage=$domainException->exception();
            return new JsonResponse($exceptionMessage . " on " . $exceptionClass  , $domainException->code(),[],false);
        }
    }