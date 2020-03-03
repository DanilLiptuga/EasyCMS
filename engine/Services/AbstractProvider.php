<?php


namespace Engine\Services;


abstract class AbstractProvider
{
    protected $di;
    function __construct($di)
    {
        $this->di = $di;
    }
    function init(){}
}