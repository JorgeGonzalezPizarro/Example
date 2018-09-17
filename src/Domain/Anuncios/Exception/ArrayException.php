<?php
    /**
     * Created by PhpStorm.
     * User: JorgePc
     * Date: 06/09/2018
     * Time: 19:23
     */
    
    namespace App\Domain\Anuncios\Exception;
    
    
    use App\Domain\Anuncios\Domain\AnuncioDomain\ComponentAlto;
    use App\Domain\Anuncios\Domain\AnuncioDomain\ComponentAncho;
    use App\Domain\Anuncios\Domain\AnuncioDomain\ComponentNombre;
    use App\Domain\Anuncios\Domain\AnuncioDomain\ComponentPosicion;
    use App\Domain\Anuncios\Domain\Component\Component;
    use App\Domain\Anuncios\Domain\Component\Components\FileComponentVO\TextFile;
    use App\Domain\Anuncios\Exception\DomainException;
    use Doctrine\Common\Collections\ArrayCollection;

    class ArrayException extends ArrayCollection
    {
        
     
     public function __construct(array $elements = [])
     {
         parent::__construct($elements);
     }
     
    public static function addException($exception ){
         
         if($exception instanceof DomainException){
         return  parent::add($exception);
         }
         return;
         
         
    }
    
    public static function getExceptions(){
         
         return parent::toArray();
         
    }
    
    }