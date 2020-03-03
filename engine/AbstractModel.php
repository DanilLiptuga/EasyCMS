<?php

namespace Engine;

use Engine\Core\Database\QueryBuilder;
use Engine\DI\DI;

abstract class AbstractModel
{
    /**
     * @var DI
     */
    protected $di;

    protected $db;


    /**
     * Model constructor.
     * @param $di
     */
    public function __construct($di)
    {
        $this->di      = $di;
        $this->db      = $this->di->get('db');

    }
}