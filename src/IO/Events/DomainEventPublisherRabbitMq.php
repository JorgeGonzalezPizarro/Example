<?php
    
    
    /**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 17/09/2018
 * Time: 11:56
 */

namespace App\IO\Events;

use App\Domain\Anuncios\Domain\EventPublisher;
use JMS\Serializer\SerializerBuilder;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

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
            /**@var $event DomainEvent */
            $this->channel->exchange_declare('exchangeCreateAnuncio', 'topic', false, true, false);

            //$this->channel->queue_declare('EXAMPLE.' . $event->getService() . '.' . '1.' . $event->getTypeEvent() . '.' . $event->getAggregateName() . '.' . $event->getEventName(), false, false, false, false);

            $queueName = null;
            $jsonFormatter = SerializerBuilder::create()->build();
            $queueMessage = new AMQPMessage($jsonFormatter->serialize($event, 'json'));
          
            
            //list($queue_name, ,) = $this->channel->queue_declare($routingKey);
            //$routingKey = 'EXAMPLE.' . $event->getService() . '.' . '1.' . $event->getTypeEvent() . '.' . $event->getAggregateName() . '.' . $event->getEventName();
            $routingKey = 'example.anuncios.1.event.anuncio.AnuncioWasCreated';
                try {
                    $this->channel->basic_publish(
                        $queueMessage, 'exchange'.$event->getService(),
                        $routingKey);

                } catch (Exception $e) {
                print_r($e);
                }
            }

        $this->channel->close();
        $this->connection->close();
        return true;
    }





}