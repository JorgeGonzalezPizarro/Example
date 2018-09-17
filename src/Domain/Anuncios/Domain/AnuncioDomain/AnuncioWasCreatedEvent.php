<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 17/09/2018
 * Time: 11:40
 */

namespace App\Domain\Anuncios\Domain\AnuncioDomain;


use App\Domain\Anuncios\Domain\AgregateRoot;
use App\IO\Events\DomainEvent;

class AnuncioWasCreatedEvent extends DomainEvent
{
    const EVENT_NAME='AnuncioWasCreated';
    const TYPE_EVENT = 'event';
    const AGGREGATE_NAME= 'Anuncio';
    const SERVICE = 'CreateAnuncio';
    public function __construct(
        string $agregateId,
        array $data = [],
        string $eventId=null,
        string $ocurredOn=null
    )
    {
        $this->eventId=
        $this->ocurredOn=new \DateTime('now');
        parent::__construct(
            $agregateId,
            $data,
            \App\IO\UuidGenerator\UUid::generateUuid()->toString(),
            new \DateTime('now'),
            self::TYPE_EVENT,
                self::SERVICE,
            self::AGGREGATE_NAME,
            self::EVENT_NAME
        );
    }

    public function __toString()
    {

        return (string)self::class;

    }

    public function getClass()
    {
        return  self::class;
    }
}