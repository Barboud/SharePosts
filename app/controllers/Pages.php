<?php
class Pages extends Controller {
    public function __construct(){
        //echo 'Pages Class';
        $this->postModel = $this->model('Post');
    }

    public function index(){
        $posts = $this->postModel->getPosts();

        $data = [
            'title' => 'index',
            'posts' => $posts
        ];

        $this->view('pages/index', $data);
    }

    public function about(){
        $data = [
            'title'=> 'About us'
        ];
        $this->view('pages/about', $data);
    }
}