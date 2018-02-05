<?php

require_once __DIR__  . '/Controller.php';

class Core{

    protected $controller = 'Coproduc';
    protected $method = 'index';
    protected $parameter = [];

    public function __construct(){
        $url = $this->getUrl();
        if(isset($url[0])){
            if(file_exists(__DIR__ . '/../controller/' . ucwords($url[0]) . 'Controller.php')){
                $this->controller = ucwords($url[0]);
                unset($url[0]);
            }
        }

        $this->controller = $this->controller . 'Controller';
        require_once  __DIR__ . '/../controller/' . $this->controller . '.php';

        $this->controller = new $this->controller;

        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        $this->parameter = $url ? array_values($url) : [];

        call_user_func([$this->controller, $this->method], $this->parameter);

    }

    public function getUrl(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
        return '';
    }

}