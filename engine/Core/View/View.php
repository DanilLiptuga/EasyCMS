<?php


namespace Engine\Core\View;

use admin\Language\AdminLanguage;

class View
{
    function __construct($di)
    {
        $this->di = $di;
        $this->theme = new Theme($di);
        if (VERT == 'admin'){
            $this->language = $this->theme->language;
        }
    }

    /**
     * @param $template
     * @param array $data
     * @param $isAdmin
     * @throws \Exception
     */
    function render($template, $data = []){
        $file = VERT != 'admin' ? ROOT_PATH . '/content/themes/'. $this->theme->theme . '/' .$template.'.php' : ROOT_PATH . '/admin/View/'.$template.'.php';
        if (is_file($file)){
            $this->theme->setData($data);
            extract($data);
            require_once $file;
        }
        else throw new \Exception('View '. $template .' not found.');
    }
}