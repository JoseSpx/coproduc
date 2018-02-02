<?php

class CoproducController extends Controller {

    public function index(){
        $this->view('index');
    }

    public function mail(){
        $this->extras("mail");
    }

    public function login(){
        //require_once __DIR__ . '/../extras/login.php';
        $this->extras("login");
    }

}