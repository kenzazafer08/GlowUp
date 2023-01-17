<?php
  class Pages extends Controller {
    public function __construct(){
     
    } 
    public function index(){

      $data = [
        ];
     
      $this->view('pages/index', $data);
    }
    public function dashbord(){

      $data = [
        ];
     
      $this->view('pages/dashbord', $data);
    }
    public function products(){

      $data = [
        ];
     
      $this->view('pages/products', $data);
    }
    public function categories(){

      $data = [
        ];
     
      $this->view('pages/categories', $data);
    }
    public function details(){

      $data = [
        ];
     
      $this->view('pages/details', $data);
    }
  }