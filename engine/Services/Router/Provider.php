<?php


namespace Engine\Services\Router;


use Engine\Core\Router\Router;
use Engine\Services\AbstractProvider;

class Provider extends AbstractProvider
{
    private $serviceName = 'router';
    function init()
    {
        $router = new Router($this->di);
        $this->di->add($this->serviceName, $router);
        require_once ROOT_PATH . '/'.VERT.'/Config/Routes.php';
    }
}