<?php

class coproducController extends Controller {

    public function index(){
        $this->view('index');
    }

    public function mail(){
        $this->extras("mail");
    }

}