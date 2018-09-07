<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 06/09/2018
 * Time: 19:27
 */
    
    namespace App\Domain\Anuncios\Domain\Component\Components\VideoComponent;


class ComponentVideo
{


    public function __construct(VideoUrl $videoUrl, VideoFormat $videoFormat, VideoWeight $videoWeight)
    {
        $this->videoUrl=$videoUrl;
        $this->videoFormat=$videoFormat;
        $this->videoWeight=$videoWeight;


    }

}