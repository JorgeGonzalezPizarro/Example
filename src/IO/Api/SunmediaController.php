<?php
/**
 * Created by PhpStorm.
 * User: JorgePc
 * Date: 08/09/2018
 * Time: 14:22
 */

namespace App\IO\Api;


use FOS\RestBundle\FOSRestBundle;
use http\Env\Request;
use League\Tactician\CommandBus;
use Symfony\Component\HttpFoundation\ParameterBag;
use Symfony\Component\HttpFoundation\RequestStack;

abstract class SunmediaController extends FOSRestBundle
{

    public function __construct(CommandBus $commandBus, RequestStack $request)
    {
        //$request=\Symfony\Component\HttpFoundation\Request::createFromGlobals();
        $this->commandBus = $commandBus;
        $this->request = $request->pop();
    }

    protected function handle($command)
    {
        $this->commandBus->handle($command);

    }

}