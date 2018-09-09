<?php
/**
 * Created by PhpStorm.
 * User: PTL-JGonzalez
 * Date: 07/09/2018
 * Time: 10:32
 */

namespace App\Domain\Anuncios\Domain\Component\Components\VideoComponentVO;


use function in_array;

class VideoFormat
{
    private const VIDEO_FORMAT = array('mp4', 'webm');

    private $format;

    public function __construct($format)
    {

        $this->format = $this->guard($format);

    }

    private function guard($format)
    {

        if ( in_array($format, $this::VIDEO_FORMAT) ) {
            return $format;
        }
        /**TODO NEW EXCEPTION */
    }
}