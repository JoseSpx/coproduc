<?php

class AdminController extends Controller {

    public function index(){
        $this->view("admin/index");
    }

    public function main(){
        $this->extras("verifyAdmin");
        $this->view("admin/cpanel");
    }

    public function login(){
        $this->database("admin_login");
    }

    public function logout(){
        $this->database("admin_logout");
    }

    public function products(){
        $this->extras("verifyAdmin");
        $this->view("admin/options/products");
    }

    public function clients($id){
        $this->extras("verifyAdmin");
        $this->view("admin/options/clients", $id);
    }

    public function client_data($id){
        $this->extras("verifyAdmin");
        $this->view("admin/options/client_data", $id);
    }

    public function client_eliminate($id){
        //$this->extras("verifyAdmin");
        $this->database("admin_client_eliminate", $id);
    }

    public function client_orders($id){
        $this->extras("verifyAdmin");
        $this->view("admin/options/client_orders", $id);
    }

    public function client_orders_pays($id){
        $this->extras("verifyAdmin");
        $this->view("admin/options/client_orders_pays", $id);
    }

    public function client_order_edit($id){
        $this->extras("verifyAdmin");
        $this->view("admin/options/client_order_edit", $id);
    }

    public function client_order_update(){
        $this->extras("verifyAdmin");
        $this->database("admin_client_order_edit_update");
    }

    public function client_order_pay_edit($id){
        $this->extras("verifyAdmin");
        $this->view("admin/options/client_order_pay_edit", $id);
    }

    public function client_order_pay_eliminate($id){
        $this->extras("verifyAdmin");
        $this->database("admin_client_order_pay_eliminate", $id);
    }

    public function admin_order_pay_edit_update(){
        $this->extras("verifyAdmin");
        $this->database("admin_order_pay_edit_update");
    }

    public function product_delete($id){
        $id = $id[0];
        $this->database("product_delete", $id);
    }

    public function product_new(){
        $this->extras("verifyAdmin");
        $this->view("admin/options/product_new");
    }

    public function product_create(){
        $this->database("product_new", $data = '');
    }

    public function product_update_view($id){
        $this->extras("verifyAdmin");
        $id = $id[0];
        $this->view("admin/options/product_edit", $id );
    }

    public function product_update(){
        $this->database("product_update");
    }

}