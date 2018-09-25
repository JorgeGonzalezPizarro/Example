<?php
/**
 * Created by PhpStorm.
 * User: PTL-JGonzalez
 * Date: 07/09/2018
 * Time: 9:08
 */

namespace App\Domain\Anuncios\Domain\States;


class StatePublish extends State
{
    private const STATE = 'publish';

    public function __construct()
    {
        $this->state = $this->getStatus();
    }

    public function publish()
    {

        // return $this;
    }

    public function stop()
    {
        return new StateStop();
    }

    public function publishing()
    {
        /* TODO EXCEPTION */
    }

    public function getStatus()
    
    {
        return $this::STATE;
    }

}