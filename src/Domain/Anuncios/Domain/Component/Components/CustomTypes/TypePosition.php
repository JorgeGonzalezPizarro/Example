<?php
/**
 * Created by PhpStorm.
 * User: Jorge Gonzalez
 * Date: 06/09/2018
 * Time: 20:22
 */
    
    namespace App\Domain\Anuncios\Domain\Component\Components\CustomTypes;


use Doctrine\ORM\Mapping as Embedded;

/**
 * @Embedded\Embedded
 */
class TypePosition
{

    private $x;
    private $y;
    private $z;
    
    /**
     * @return int
     */
    public function getX(): int
    {
        return $this->x;
    }
    
    /**
     * @return int
     */
    public function getY(): int
    {
        return $this->y;
    }
    
    /**
     * @return int
     */
    public function getZ(): int
    {
        return $this->z;
    }
    
    public function __construct($posicion)
    {

        $this->x = $this->setX($posicion);
        $this->y = $this->setY($posicion);
        $this->z = $this->setZ($posicion);
    }
    

    private function setX($posicion)
    {
        $eje = 'x';
        return $this->guard($posicion, $eje);
    }

    private function setY($posicion)
    {
        $eje = 'y';
        return $this->guard($posicion, $eje);
    }

    private function setZ($posicion)
    {
        $eje = 'z';
        return $this->guard($posicion, $eje);

    }


    private function guard($posicion, $eje)
    {
        if ( !in_array($eje, $posicion) ) {
            /**todo exception*/
        }
        if ( !is_int($posicion[$eje]) ) {

            return (int)$posicion[$eje];
        }
        return $posicion[$eje];
    
    
    }
}