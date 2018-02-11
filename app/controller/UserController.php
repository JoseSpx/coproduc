<?php

class UserController extends Controller {

    public function config(){
        $this->view("user/updateConfig");
    }

    //view
    public function order(){
        $this->view("user/order");
    }

    public function order_detail(){
        $this->view("user/order_detail");
    }

    public function order_list($id){
        $this->view("user/order_list", $id);
    }

    public function update_username(){
        $this->database("update_username");
    }

    public function update_pass(){
        $this->database("update_pass");
    }

    public function update_data(){
        $this->database("update_data");
    }

    public function order_detail_save(){
        $this->database("order_detail_save");
    }


}