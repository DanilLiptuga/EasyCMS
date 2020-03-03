<?php

namespace admin\Models;

use Engine\AbstractModel;
use Engine\Core\Database\QueryBuilder;

class Users extends AbstractModel
{
    public function __construct($di)
    {
       $this->queryBuilder = new QueryBuilder();
       $this->di      = $di;
       $this->db      = $this->di->get('db');
    }

    public function getUsers()
    {
        $sql = $this->queryBuilder->select()
            ->from('users')
            ->orderBy('id', 'DESC')
            ->sql();

        return $this->db->query($sql);
    }
    public function getAdmins()
    {
        $sql = $this->queryBuilder->select()
            ->from('users')
            ->where('role','admin')
            ->orderBy('id', 'DESC')
            ->sql();


        return $this->db->query($sql);
    }
}