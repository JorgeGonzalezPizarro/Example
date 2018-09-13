<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 06/09/2018
 * Time: 19:23
 */

namespace App\Domain\Anuncios\Domain\Component\Components;

use App\Domain\Anuncios\Domain\Component\Components\ComponentsVO\ComponentAlto;
use App\Domain\Anuncios\Domain\Component\Components\ComponentsVO\ComponentAncho;
use App\Domain\Anuncios\Domain\Component\Components\ComponentsVO\ComponentNombre;
use App\Domain\Anuncios\Domain\Component\Components\ComponentsVO\ComponentPosition;
use App\Domain\Anuncios\Domain\Component\Components\ComponentsVO\TypeAncho;
use App\Domain\Anuncios\Domain\Component\Components\ComponentsVO\TypeAlto;
use App\Domain\Anuncios\Domain\Component\Components\ComponentsVO\TypeId;
use App\Domain\Anuncios\Domain\Component\Components\ComponentsVO\TypePosition;
use App\Domain\Anuncios\Domain\Component\Components\ComponentsVO\TypeNombre;

use App\Domain\Anuncios\Domain\Component\Component;
use App\Domain\Anuncios\Domain\Component\Components\FileComponentVO\TextFile;
use App\IO\UuidGenerator\UUid;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="component_file")
 */
class ComponentFile extends Component
{

    protected $ancho;
    protected $alto;
    protected $position;
    protected $componentId;
    protected $anuncioId;
    private $textFile;
    public function __construct($componentId,$anuncioId,$textFile,$ancho,$alto,$position,$nombre)
    {
        
        $this->componentId=$componentId->uuidToString();
        $this->anuncioId=$anuncioId;
        $textFile = new TextFile($textFile);
        $this->textFile = $textFile->getText();
        $this->position=new ComponentPosition($position);
        $this->ancho=new ComponentAncho($ancho);
        $this->alto=new ComponentAlto($alto);
        $this->nombre = new ComponentNombre($nombre);
        $this->anuncioId=$anuncioId;
    }
    


    protected static function constructComponent($anuncioId,$componentObject)
    {
        return new self ($componentObject['id'],$anuncioId,
            $componentObject['text'],
            $componentObject['ancho'],
            $componentObject['alto'],
            $componentObject['position'],
            $componentObject['name']);;
    }
    public function getComponent()
    {
        return $this;
    }
    

    public function getTextFile(){
        return $this->textFile;
    }

    
    
    
    public function getComponentId()
    {
        return $this->componentId;

    }
    
    public function setComponentId($id)
    {
        parent::setComponentId($this->componentId);
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
    
    public function getAnuncioId()
    {
        return $this->anuncioId;
    }
    
    public function setAnuncioId($anuncioId)
    {
            parent::setAnuncioId($this->anuncioId);
        
    }
}