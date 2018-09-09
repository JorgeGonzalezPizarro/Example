<?php
/**
 * Created by PhpStorm.
 * User: PTL-JGonzalez
 * Date: 07/09/2018
 * Time: 9:42
 */

namespace App\Domain\Anuncios\Domain\States;


use function in_array;

class StateValidator
{
    public const status = array('PUBLISH', 'PUBLISHING', 'STOP');

    public function __construct($status)
    {

        $this->status = $status;
        $this->path = "State";

    }

    public static function fromRequest($status)
    {

        if ( !in_array($status, self::status) ) {

        }
        $statusClass = ucfirst(strtolower($status));
        $prefix = "State";
        $class = __NAMESPACE__ . "\\" . $prefix . $statusClass;
        return new $class();

    }


}