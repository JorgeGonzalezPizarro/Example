<?php
    /**
     * Created by PhpStorm.
     * User: Jorge Gonzalez
     * Date: 06/09/2018
     * Time: 20:22
     */
    
    namespace App;
    
    
    use Symfony\Component\Console\Application;
    use Symfony\Component\DependencyInjection\ContainerBuilder;
    use Symfony\Component\HttpKernel\Bundle\Bundle;

    class MyBundle extends Bundle
    {
        
public function __construct()
{

}


        public function boot()
        {
            parent::boot(); // TODO: Change the autogenerated stub
        }

        public function shutdown()
        {
            parent::shutdown(); // TODO: Change the autogenerated stub
        }

        public function build(ContainerBuilder $container)
        {
            parent::build($container); // TODO: Change the autogenerated stub
        }

        public function getContainerExtension()
        {
            return parent::getContainerExtension(); // TODO: Change the autogenerated stub
        }

        public function getNamespace()
        {
            return parent::getNamespace(); // TODO: Change the autogenerated stub
        }

        public function getPath()
        {
            return parent::getPath(); // TODO: Change the autogenerated stub
        }

        public function registerCommands(Application $application)
        {
            parent::registerCommands($application); // TODO: Change the autogenerated stub
        }

        protected function getContainerExtensionClass()
        {
            return parent::getContainerExtensionClass(); // TODO: Change the autogenerated stub
        }

        protected function createContainerExtension()
        {
            return parent::createContainerExtension(); // TODO: Change the autogenerated stub
        }
    }