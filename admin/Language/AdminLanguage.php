<?php


namespace admin\Language;


class AdminLanguage
{
    public $config;
    function __construct($di)
    {
        $this->di = $di;
        $this->load = $this->di->get('load');
        $this->settings = $this->load->model('settings');
        $this->config = require ROOT_PATH . '/admin/Config/Language/'. trim($this->settings->getSetting('Language')->value) .'.php';
    }
    function getElements(){
        return $this->config;
    }
    function getElement($name){
        return $this->config[$name];
    }
}