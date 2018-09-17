<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 17/09/2018
 * Time: 11:56
 */

namespace App\IO\Events;

use App\Domain\Anuncios\Domain\AnuncioDomain\Anuncio;
use App\Domain\Anuncios\Domain\AnuncioDomain\AnuncioWasCreatedEvent;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use App\Domain\Anuncios\Domain\EventPublisher;
use PhpAmqpLib\Message\AMQPMessage;
use Symfony\Component\EventDispatcher\EventDispatcher;

class DomainEventPublisherRabbitMq  implements EventPublisher
{

    private $connection;
    private $channel;

    public function __construct()
    {
        $this->connection = new AMQPStreamConnection('127.0.0.1', 5672, 'guest', 'guest');
        $this->channel = $this->connection->channel();
        /*  Make sure the queues we need are set up */
    }

    public function publish(array $domainEvent)
    {
        foreach ($domainEvent as $event) {
          $exchange=  $this->channel->exchange_declare(
                'exchange'.$event->getService(),
                'direct',
                false,
                false,
                false);
            //$this->channel->queue_declare('EXAMPLE.' . $event->getService() . '.' . '1.' . $event->getTypeEvent() . '.' . $event->getAggregateName() . '.' . $event->getEventName(), false, false, false, false);

            $queueName = null;
            $jsonFormatter = SerializerBuilder::create()->build();
            $queueMessage = new AMQPMessage($jsonFormatter->serialize($event, 'json'));

            /* Only push certain types of parcels to certain queues */
                /* Provided cases for matching queueName */
                    $routingKey = 'EXAMPLE.' . $event->getService() . '.' . '1.' . $event->getTypeEvent() . '.' . $event->getAggregateName() . '.' . $event->getEventName();
                    //list($queue_name, ,) = $this->channel->queue_declare($queueName, false, false, true, false);
            list($queue_name, ,) = $this->channel->queue_declare($routingKey);

                try {
                    $this->channel->basic_publish(
                        $queueMessage, $exchange,
                        $queue_name);

                } catch (Exception $e) {
                print_r($e);
                }
            }

        $this->channel->close();
        $this->connection->close();
        return true;
    }





}