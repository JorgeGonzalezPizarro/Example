<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 17/09/2018
 * Time: 11:42
 */

namespace App\IO\Events;


use Symfony\Component\EventDispatcher\Event;

abstract class DomainEvent extends Event
{

    protected $agregateId;
    protected $data = [];
    protected $eventId ;
    protected $ocurredOn;
    protected $service;
    protected $typeEvent;
    protected $aggregateName;

    /**
     * @return mixed
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @return mixed
     */
    public function getTypeEvent()
    {
        return $this->typeEvent;
    }

    /**
     * @return mixed
     */
    public function getAggregateName()
    {
        return $this->aggregateName;
    }

    /**
     * @return mixed
     */
    public function getEventName()
    {
        return $this->eventName;
    }
    protected $eventName;
    public function __construct(
        string $agregateId,
        array $data = [],
        string $eventId=null,
        \DateTime $ocurredOn=null,
        $typeEvent,
        $service,
        $aggregateName,
        $eventName
    ){

        $this->agregateId=$agregateId;
        $this->data = $data;
        $this->eventId=$eventId;
        $this->ocurredOn=$ocurredOn;
        $this->service =$service;
        $this->aggregateName=$aggregateName;
        $this->eventName=$eventName;
        $this->typeEvent=$typeEvent;

    }

    /**
     * @return string
     */
    public function getAgregateId(): string
    {
        return $this->agregateId;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @return string
     */
    public function getEventId(): string
    {
        return $this->eventId;
    }

    /**
     * @return \DateTime
     */
    public function getOcurredOn(): \DateTime
    {
        return $this->ocurredOn;
    }

    public abstract function getClass();
}