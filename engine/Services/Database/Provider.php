<?php


namespace Engine\Services\Database;
use Engine\Core\Database\Connection;
use Engine\Services\AbstractProvider;

class Provider extends AbstractProvider
{
    private $serviceName = 'db';
    function init()
    {
        $link = new Connection();
        $this->di->add($this->serviceName, $link);
    }
}