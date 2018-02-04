<?php

class RegisterController extends Controller{

    public function index(){
        $this->view('register');
    }

    public function register_user(){
        $this->database("register_user");
    }

    public function update_username(){
        $this->database("update_username");
    }

}