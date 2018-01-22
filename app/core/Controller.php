<?php

class Controller{

    public function view($view){
        if(file_exists(__DIR__ . '/../view/' . $view . '.php')){
            require_once __DIR__ . '/../view/' . $view . '.php';
        }
    }

    public function model($view){
        if(file_exists(__DIR__ . '/../view/' . $view . '.php')){
            require_once __DIR__ . '/../view/' . $view . '.php';
        }
    }

    public function extras($view){
        if(file_exists(__DIR__ . '/../view/' . $view . '.php')){
            require_once __DIR__ . '/../view/' . $view . '.php';
        }
    }

}