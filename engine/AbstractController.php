<?php


namespace Engine;

use Engine\Core\Database\QueryBuilder;

abstract class AbstractController
{
    public $di;
    protected $data = [];
    function __construct($di)
    {
        $this->di = $di;
        $this->view = $this->di->get('view');
        $this->db = $this->di->get('db');
        $this->queryBuilder = new QueryBuilder();
        $this->load = $this->di->get('load');
    }

    function index(){}
}