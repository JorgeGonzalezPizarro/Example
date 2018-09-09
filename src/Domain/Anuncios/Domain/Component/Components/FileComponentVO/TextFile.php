<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 09/09/2018
 * Time: 17:00
 */

namespace App\Domain\Anuncios\Domain\Component\Components\FileComponentVO;


class TextFile
{

    private $text;

    public function __construct($text)
    {
        $this->text = $this->setText($text);
    }

    private function setText($text)
    {
        $text = $this->guard($text);
        return $text;

    }

    private function guard($text)
    {

        if ( !is_string($text) ) {
            /**TODO NEW EXCEPTION */
        }
        if ( strlen($text) > 140 ) {
            /*TODO NEW EXCEPTION*/
        }
        return $text;
    }

    public function getText()
    {
        return $this->text;
    }
}