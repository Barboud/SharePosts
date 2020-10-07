<?php
class Pages extends Controller {
    public function __construct(){
        echo 'Pages Class';
    }

    public function index(){
        $data = [
            'title'=> 'Welcom'
        ];
        $this->view('pages/index', $data);
    }

    public function about($id){
        echo $id;
    }
}