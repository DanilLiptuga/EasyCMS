<?php


namespace Engine\Core\Router;

use \Exception;

class Router
{
    // массив для хранения соответствия url => функция
    public $routes = array();
    function __construct($di)
    {
        $this->di = $di;
    }

    // данный метод принимает шаблон url-адреса
    // как шаблон регулярного выражения и связывает его
    // с пользовательской функцией
    public function route($pattern, $uri)
    {
        // функция str_replace здесь нужна, для экранирования всех прямых слешей
        // так как они используются в качестве маркеров регулярного выражения
        $pattern = '/^' . str_replace('/', '\/', $pattern) . '$/';
        $this->routes[$pattern] = $uri;
    }


    // данный метод проверяет запрошенный $url(адрес) на
    // соответствие адресам, хранящимся в массиве $routes
    public function execute($url)
    {
        foreach ($this->routes as $pattern => $uri)
        {
            $oPattern = $pattern;
            if (strpos($pattern, ':') !== false) {
                $pattern = str_replace(':any', '(.+)', str_replace(':num', '([0-9]+)', $pattern));
            }
            if (strpos($uri, '@')){
                $explodedUri = explode('@', $uri);
                $controller = $explodedUri[0];
                $action = $explodedUri[1];
            }
            else {
                $controller = $uri;
                $action = 'index';
            }
            if (preg_match($pattern, $url, $params)) // сравнение идет через регулярное выражение
            {
                // соответствие найдено, поэтому удаляем первый элемент из массива $params
                // который содержит всю найденную строку
                array_shift($params);
                $controller = '\\'.VERT.'\\Controllers\\'.$controller;
                return call_user_func_array([new $controller($this->di), $action], array_values($params));
            }
            else if(array_search($oPattern, array_keys($this->routes)) == count($this->routes) - 1){
                throw new Exception("404. Cannot find ".$pattern." in Routes");
            }


        }
    }
}