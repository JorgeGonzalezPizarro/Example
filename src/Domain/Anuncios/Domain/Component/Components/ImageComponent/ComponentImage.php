<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 06/09/2018
 * Time: 19:27
 */
    
    namespace App\Domain\Anuncios\Domain\Component\Components\ImageComponent;


class ComponentImage
{

    public function __construct(VideoUrl $imageUrl,ImageFormat $imageFormat,ImageWeight $imageWeight)
    {

        $this->imageFormat=$imageFormat;
        $this->imageUrl=$imageUrl;
        $this->imageWeight=$imageWeight;
    }

}