<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 06/09/2018
 * Time: 19:27
 */

namespace App\Domain\Anuncios\Domain\Component\Components;


use App\Domain\Anuncios\Domain\Component\Component;

class ComponentVideo extends  Component
{
    protected $componentId;
    protected $ancho;
    protected $alto;
    protected $position;
    private $videoFormat;
    private $videoUrl;
    private $videoWeight;
    protected $anuncioId;
    public function __construct($anuncioId,$ancho,$alto,$position,$nombre,VideoUrl $videoUrl, VideoFormat $videoFormat, VideoWeight $videoWeight)
    {
        $this->anuncioId=$anuncioId;
        $this->componentId= new ComponentId(new UUid());
        $this->position=new ComponentPosicion($position);
        $this->ancho=new ComponentAncho($ancho);
        $this->alto=new ComponentAlto($alto);
        $this->nombre = new ComponentNombre($nombre);
        $this->videoUrl = $videoUrl;
        $this->videoFormat = $videoFormat;
        $this->videoWeight = $videoWeight;


    }
    public function getComponentId()
    {
        return $this->componentId;
        
    }
    
    public function setComponentId($id)
    {
        parent::setIdComponent($this->componentId);
    }
    
    public function getPosicion()
    {
        return $this->position;
    }
    
    public function getNombre()
    {
        return $this->nombre;
    }
    
    public function setNombre($nombre)
    {
        parent::setNombre($this->nombre);
    }
    
    public function setAncho($ancho)
    {
        parent::setAncho($this->ancho);
    }
    
    public function setAlto($alto)
    {
        parent::setAlto($this->alto);
    }
    
    public function setComponentPosition($position)
    {
        parent::setPosicion($this->position);
    }
    
    public function getAncho()
    {
        return $this->ancho;
    }
    
    public function getAlto()
    {
        return $this->alto;
    }
    
    public function getComponentPosition()
    {
        return $this->position;
    }
    
    public function getComponent()
    {
        return $this;
    }
    protected static function constructComponent($anuncioId,$componentObject)
    {
        return new self ($anuncioId,
            $componentObject['videoUrl'],
            $componentObject['videoFrmat'],
            $componentObject['videoWeight'],
            $componentObject['ancho'],
            $componentObject['alto'],
            $componentObject['position'],
            $componentObject['name']);;
    }
    
    public function getAnuncioId()
    {
        return $this->anuncioId;
    }
    
    public function setAnuncioId($anuncioId)
    {
        parent::setAnuncioId($this->anuncioId);
        
    }
}