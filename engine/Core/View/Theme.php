<?php


namespace Engine\Core\View;


use admin\Language\AdminLanguage;

class Theme
{
     public $theme;
     protected $data;
    /**
     * Theme constructor.
     */
    function __construct($di)
     {
         $this->di = $di;
         $this->load = $this->di->get('load');
         $this->settings = $this->load->model('settings');
         $this->theme = $this->settings->getSetting('Theme')->value;
         $this->path = '/content/themes/' .$this->theme.'/';
         if (VERT == 'admin'){
             $this->language = new AdminLanguage($this->di);
         }
     }

    /**
     * @throws \Exception
     */
    function header(){
        $file = VERT != 'admin' ? ROOT_PATH . '/content/themes/' .$this->theme.'/header.php' : ROOT_PATH . '/admin/View/header.php';
        if (is_file($file)){
            extract($this->data);
            require_once $file;
        }
        else throw new \Exception('Header file does not exist');

    }

    /**
     * @throws \Exception
     */
    function footer(){
        $file = VERT != 'admin' ? ROOT_PATH . '/content/themes/' .$this->theme.'/footer.php' : ROOT_PATH . '/admin/View/footer.php';
        if (is_file($file)){
            extract($this->data);
            require_once $file;
        }
        else throw new \Exception('Footer file does not exist');
    }

    /**
     * @throws \Exception
     */
    function sidebar(){
        $file = VERT != 'admin' ? ROOT_PATH . '/content/themes/' .$this->theme.'/sidebar.php' : ROOT_PATH . '/admin/View/sidebar.php';
        if (is_file($file)){
            extract($this->data);
            require_once $file;
        }
        else throw new \Exception('Sidebar file does not exist');
    }

    /**
     * @param $templateName
     * @throws \Exception
     */
    function load_template($templateName){
        $file = VERT != 'admin' ? ROOT_PATH . '/content/themes/' .$this->theme.'/'.$templateName.'.php' : ROOT_PATH . '/admin/View/'.$templateName.'.php';
        if (is_file($file)){
            extract($this->data);
            require_once $file;
        }
        else throw new \Exception('Template file does not exist');
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

}