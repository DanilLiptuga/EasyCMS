<?php


namespace Engine\Services\View;


use Engine\Core\View\View;
use Engine\Services\AbstractProvider;

class Provider extends AbstractProvider
{
    private $serviceName = 'view';
    function init()
    {
        $view = new View($this->di);
        $this->di->add($this->serviceName, $view);
    }
}