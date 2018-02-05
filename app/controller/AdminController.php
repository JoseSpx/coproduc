<?php

class AdminController extends Controller {

    public function index(){
        $this->view("admin/cpanel");
    }

    public function products(){
        $this->view("admin/options/products");
    }

    public function product_delete($id){
        $id = $id[0];
        $this->database("product_delete", $id);
    }

    public function product_new(){
        $this->view("admin/options/product_new");
    }

    public function product_create(){
        $this->database("product_new", $data = '');
    }

    public function product_update_view($id){
        $id = $id[0];
        $this->view("admin/options/product_edit", $id );
    }

    public function product_update(){
        $this->database("product_update");
    }

}