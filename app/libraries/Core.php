<?php

class Core{
    protected $currentController = 'page';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct(){
        $this->geturl();
    }

    public function geturl(){
        echo $_GET['url'];
    }
}