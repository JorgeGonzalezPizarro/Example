<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 06/09/2018
 * Time: 19:23
 */

namespace App\Domain\Anuncios\Domain\Component\Components;


use App\Domain\Anuncios\Domain\Component\Component;
use App\Domain\Anuncios\Domain\Component\Components\FileComponentVO\TextFile;

class ComponentFile extends Component
{

    public function __construct($textFile)
    {
        $textFile = new TextFile($textFile);
        $this->textFile = $textFile->getText();
    }


    public static function createComponent($componentType, $componentObject)
    {
        return new self ($componentObject['text']);
    }

    protected static function constructComponent($componentObject)
    {
        return new self ($componentObject['text']);

    }

    public function getComponent()
    {
        return $this;
    }
}