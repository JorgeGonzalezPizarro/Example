<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 06/09/2018
 * Time: 19:23
 */

namespace App\Domain\Anuncios\Domain\Component\Components;


class ComponentFile
{

    public function __construct(TextFile $textFile)
    {
        $this->textFile=$textFile;
    }

}