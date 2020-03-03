<?php


namespace admin\Models;


use Engine\AbstractModel;
use Engine\Core\Database\QueryBuilder;

class Settings extends AbstractModel
{
    public function __construct($di)
    {
        $this->queryBuilder = new QueryBuilder();
        $this->di      = $di;
        $this->db      = $this->di->get('db');
    }

    function getSettings(){
        $sql = $this->queryBuilder->select()
            ->from('settings')
            ->sql();

        return $this->db->query($sql);
    }
    function getSetting($name){
        $sql = $this->queryBuilder->select()
            ->from('settings')
            ->where('name', $name)
            ->limit('1')
            ->sql();
        return $this->db->query($sql, $this->queryBuilder->values)[0];
    }
    function updateSetting($id, $name, $value){
        $setting = new Setting($id);
        $setting->setName($name);
        $setting->setValue($value);
        return $setting->save();
    }
}