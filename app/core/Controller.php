<?php

class Controller{

    public function view($view){
        if(file_exists(__DIR__ . '/../view/' . $view . '.php')){
            require_once __DIR__ . '/../view/' . $view . '.php';
        }
    }

    public function model($view){
        if(file_exists(__DIR__ . '/../model/' . $view . '.php')){
            require_once __DIR__ . '/../model/' . $view . '.php';
        }
    }

    public function extras($extras){
        if(file_exists(__DIR__ . '/../extras/' . $extras . '.php')){
            require_once __DIR__ . '/../extras/' . $extras . '.php';
        }
    }

    public function database($database){
        if(file_exists(__DIR__ . '/../extras/' . $database . '.php')){
            require_once __DIR__ . '/../extras/' . $database . '.php';
        }
    }

}













