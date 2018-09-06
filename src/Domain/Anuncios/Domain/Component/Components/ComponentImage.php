<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 06/09/2018
 * Time: 19:27
 */

namespace App\Domain\Anuncios\Domain\Component\Components;


class ComponentImage
{

    public function __construct(ImageUrl $imageUrl,ImageFormat $imageFormat,ImageWeight $imageWeight)
    {

        $this->imageFormat=$imageFormat;
        $this->imageUrl=$imageUrl;
        $this->imageWeight=$imageWeight;
    }

}