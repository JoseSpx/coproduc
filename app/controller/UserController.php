<?php

class UserController extends Controller {

    public function config(){
        $this->view("user/updateConfig");
    }

    public function update_username(){
        $this->database("update_username");
    }

    public function update_pass(){
        $this->database("update_pass");
    }


}