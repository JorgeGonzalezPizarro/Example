<?php
    /**
     * Created by PhpStorm.
     * User: JorgePc
     * Date: 06/09/2018
     * Time: 19:23
     */
    
    namespace App\Domain\Anuncios\Domain\Component\Components;
    
    
    use App\Domain\Anuncios\Domain\AnuncioDomain\ComponentAlto;
    use App\Domain\Anuncios\Domain\AnuncioDomain\ComponentAncho;
    use App\Domain\Anuncios\Domain\AnuncioDomain\ComponentNombre;
    use App\Domain\Anuncios\Domain\AnuncioDomain\ComponentPosicion;
    use App\Domain\Anuncios\Domain\Component\Component;
    use App\Domain\Anuncios\Domain\Component\Components\FileComponentVO\TextFile;
    use Doctrine\Common\Collections\ArrayCollection;

    class ArrayComponents extends ArrayCollection
    {
        
     
     public function __construct(array $elements = [])
     {
         parent::__construct($elements);
     }
    
    
    }