<?php
/**
 * Created by PhpStorm.
 * User: PTL-JGonzalez
 * Date: 07/09/2018
 * Time: 9:11
 */


namespace App\Domain\Anuncios\Domain\States;


class StatePublishing implements State
{
    private const STATE = 'PUBLISHING';

    public function publish()
    {

        return new StateInterfacePublish();
    }

    public function stop()
    {
        return new StateInterfaceStop();
    }

    public function publishing()
    {
        /**TODO NEW EXCEPTION **/
    }

    public function getStatus()
    {
        return $this::STATE;
    }

}