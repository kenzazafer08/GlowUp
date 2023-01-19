<?php   


  class Pages extends Controller {
    protected $productModel;
    protected $categorieModel;

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
    public function products($cat = null){
      // die($cat);
      if( $cat == null || $this->categorieModel->getSingleCategorie($cat) == null){
        redirect('/pages');
      }
      $product = $this->productModel->getProducts();  
      $data=[
          'products' => $product,
          'categorie' => $cat
      ];
      // echo "<pre>";
      // var_dump($data);
      // echo "<pre>";
      $this->view('pages/products',$data);
    }
    public function Allproduct(){
      $product = $this->productModel->getProducts();  
      $data=[
          'products' => $product
      ];
      $this->view('pages/Allproduct',$data);
    }
    public function details($id = null){
      if($id ==null || $this->productModel->getSingleProduct($id) == null){
        redirect('/pages');
      }
      $product = $this->productModel->getProducts();  
      $data=[
          'products' => $product,
          'id' => $id
      ];
      $this->view('pages/details',$data);
    }
  }