<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 17/09/2018
 * Time: 11:54
 */

namespace App\Domain\Anuncios\Domain;


use App\IO\Events\DomainEvent;

interface EventPublisher
{

    public function publish(array $domainEvent);


}