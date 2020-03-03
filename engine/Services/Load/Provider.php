<?php


namespace Engine\Services\Load;
use Engine\Load;
use Engine\Services\AbstractProvider;

class Provider extends AbstractProvider
{
    private $serviceName = 'load';
    function init()
    {
        $load = new Load();
        $this->di->add($this->serviceName, $load);
    }
}