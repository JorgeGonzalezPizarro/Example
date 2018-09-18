<?php
    /**
     * Created by PhpStorm.
     * User: PTL-JGonzalez
     * Date: 18/09/2018
     * Time: 11:03
     */
    
    namespace App\IO\Api;
    
    
    use App\Domain\Anuncios\Domain\EventSubscriber;
    use PhpAmqpLib\Connection\AMQPStreamConnection;

    class ExampleConsumerRabbitImplementation implements EventSubscriber
    {
    
        private $connection;
        private $channel;
    
        private function __construct()
        {
            $this->connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
            $this->channel = $this->connection->channel();
        }
    
    
        public static function connect()
        {
            return new self;
        
        }
    
        public function handleEvents()
        {
    
        
    
        }
    
        public function getEvents(): void
        {
            $this->channel->exchange_declare('exchangeCreateAnuncio', 'direct', true, true, true);
            list($queue_name, ,) = $this->channel->queue_declare('components.component.create_component_on_anuncio_created',
                false, false);
            $this->channel->queue_bind($queue_name, 'exchangeCreateAnuncio');
    
            $callback = function ($msg) {
                echo ' [x] ', $msg->body, "\n";
            };
            $this->channel->basic_consume($queue_name, '', false, true, false, false, $callback);
            
    
        }
        
    }
    
   