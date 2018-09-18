<?php
    /**
     * Created by PhpStorm.
     * User: PTL-JGonzalez
     * Date: 18/09/2018
     * Time: 11:30
     */
    
    namespace App\IO\Api;
    
    
    use App\Domain\Anuncios\Domain\EventSubscriber;
    use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
    use Symfony\Component\Console\Command\Command;

    class ExampleInputCommand extends Command
    {
    
    
        public function __construct(?string $name = NULL)
        {
            parent::__construct($name);
        }
    
        protected function configure()
        {
            $this
            
        // the name of the command (the part after "bin/console")
        ->setName('app:create-user')
    
            // the short description shown while running "php bin/console list"
            ->setDescription('Creates a new user.')
    
            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command allows you to create a user...')
        ;
//            $this
//                ->setName('example:initSubscribers')
//                ->setDescription('Execute cron each time with php bin/console example:initSubscribers')
//            ;
//            $this->addArgument('startIdCard', InputArgument::REQUIRED,'Parámetro inicial id_card para comenzar la migracion');
//            $this->addArgument('endIdCard' , InputArgument::REQUIRED,'Parámetro final id_card para finalizar la ejecucion');
//
        }
    
        protected function execute(InputInterface $input, OutputInterface $output)
        {
        
            EventSubscriber::connect();
        
        }
    }