<?php
  class dashboard extends Controller {
    private $dashboardModel;
    private $categorieModel;
    public function __construct(){
        if(!isLoggedIn()){
            redirect('/pages');
        }
        $this->dashboardModel = $this->model('product');
        $this->categorieModel = $this->model('categorie');
    } 
public function index(){
$products = $this->dashboardModel->countproduct();
$categorie = $this->categorieModel->countcategorie();
$nbp = $products['total'];
$nbc = $categorie['total'];
$data = [
    'nbp' => $nbp,
    'nbc' => $nbc
  ];

$this->view('pages/dashbord', $data);
}
public function products(){
$products = $this->dashboardModel->getProducts();
$data = [  
  'products' => $products 
  ];
$this->view('pages/products', $data);
}
public function categories(){

$data = [
  ];

$this->view('pages/categories', $data);
}
public function details($id){
  if($id ==null || $this->dashboardModel->getSingleProduct($id) == null){
    redirect('/pages');
  }
  $product = $this->dashboardModel->getProducts();  
  $data=[
      'products' => $product,
      'id' => $id
  ];
  $this->view('pages/details',$data);
}
public function addcategorie(){

$data = [
  ];

$this->view('pages/addcategorie', $data);
}
public function addproduct(){

$data = [
  ];

$this->view('pages/addproduct', $data);
}
  }