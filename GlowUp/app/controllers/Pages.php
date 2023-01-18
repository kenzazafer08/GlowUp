<?php
  class Pages extends Controller {
    public function __construct(){
      $this->productModel = $this->model('product');
      $this->categorieModel = $this->model('categorie');
    }
    
    public function index(){
      $cat = $this->categorieModel->getCategories();
      $data=[
          'categories' => $cat
      ];
      $this->view('pages/index',$data);
    }
    public function products(){
      
      $this->view('pages/products');
    }
    public function details(){
     
      $this->view('pages/details');
    }
  }