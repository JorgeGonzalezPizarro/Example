<?php
/**
 * Created by PhpStorm.
 * User: PTL-JGonzalez
 * Date: 07/09/2018
 * Time: 9:10
 */

namespace App\Domain\Anuncios\Domain\States;


class StateStop implements IState
{
    private const STATE = 'STOP';

    public function publish()
    {

        return new StateInterfacePublish();
    }

    public function stop()
    {
        /**TODO EXCEPTION **/
    }

    public function publishing()
    {
        return new StateInterfacePublishing();
    }

    public function getStatus()
    {
        return $this::STATE;
    }

}