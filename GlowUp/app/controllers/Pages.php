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
    public function Allproduct(){
      $cat = $this->categorieModel->getCategories();
      $product = $this->productModel->getProducts();  
      $data=[
          'products' => $product,
          'categories' => $cat
      ];
      $this->view('pages/Allproduct',$data);
    }
    public function name($name = null){
      if($name != null){
        $product = $this->productModel->getProductsbyname($name);  
        
      }else{
        $product = $this->productModel->getProducts();  
      }

      $data = json_encode($product);
      echo $data;
      
    }
    public function categorie($name = 0){
      if($name > 0){
        $product = $this->productModel->getProductsbycategorie($name);  
      }else{
        $product = $this->productModel->getProducts();  
      }

      $data = json_encode($product);
      echo $data;
      
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
    public function About(){
      $this->view('pages/about');
    }
    public function Contact(){
      $this->view('pages/contact');
    }
  }