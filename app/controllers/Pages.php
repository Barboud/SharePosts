<?php
class Pages{
    public function __construct(){
        echo 'Pages post';
    }

    public function index($id){
        echo 'index'.$id;
    }

    public function about($id){
        echo $id;
    }
}