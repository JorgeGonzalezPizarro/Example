<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 17/09/2018
 * Time: 11:36
 */

namespace App\Domain\Anuncios\Domain;


use App\IO\Events\DomainEvent;

class AgregateRoot
{

    private $domainEvents = [];

    public function getDomainEvents(): array {

        $domainEvents=$this->domainEvents;
        $this->domainEvents= [];
        return $domainEvents;
    }




    protected function saveDomainEvent(DomainEvent $domainEvent){

        $this->domainEvents[]=$domainEvent;

    }
}