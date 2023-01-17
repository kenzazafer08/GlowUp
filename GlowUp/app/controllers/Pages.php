<?php
  class Pages extends Controller {
    public function __construct(){
     
    }
    
    public function index(){
     
      $this->view('pages/index');
    }
    public function products(){
     
      $this->view('pages/products');
    }
    public function details(){
     
      $this->view('pages/details');
    }
  }