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
  'delete' => '',
  'products' => $products ,
  ];
$this->view('pages/products', $data);
}
public function categories(){
  $categorie = $this->categorieModel->getCategories();
  $data = [  
    'categorie' => $categorie,
    'delete' => ''
    ];
$this->view('pages/categories', $data);
}
public function details($id = null ){
  if($id ==null || $this->dashboardModel->getSingleProduct($id) == null){
    redirect('dashboard');
  }
  $product = $this->dashboardModel->getProducts();  
  $data=[
      'products' => $product,
      'id' => $id
  ];
  $this->view('pages/details',$data);
}
public function addcategorie(){
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //process form
    $data = [
        'name' => $_POST['name'],
        'image' => $_POST['image'],
        'discription' => $_POST['discription'],
        'name_err' => '',
        'image_err' => '',
        'discription_err' => '',
        'Add' => '', 
    ];
      if (empty($data['name'])) {
          $data['name_err'] = 'name must be filled';
      }
      if (empty($data['image'])) {
          $data['image_err'] = 'image must be filled';
      }
      if (empty($data['discription'])) {
        $data['discription_err'] = 'discirption must be filled';
      }
      if(empty($data['name_err']) && empty($data['image_err']) && empty($data['discription_err'])){
         $done =  $this->categorieModel->addcategorie($data);
         if($done){
          $data = [
            'name' => '',
            'image' => '',
            'discription' => '',
            'name_err' => '',
            'image_err' => '',
            'discription_err' => '',
            'add' => 'Categorie added succesfuly', 
        ];
        $this->view('pages/addcategorie', $data);
         }
      }else{
        $data['Add'] = 'something went wrong !';
      $this->view('pages/addcategorie', $data);
      }
}
$data = [
  'name' => '',
  'image' => '',
  'discription' => '',
  'name_err' => '',
  'image_err' => '',
  'discription_err' => '',
  'add' => ''
  ];

$this->view('pages/addcategorie', $data);
}
public function editcat($id = null ){
  if($id ==null || $this->dashboardModel->getSingleProduct($id) == null){
    redirect('dashboard');
  }
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //process form
    $data = [
         'id' => $id,
        'name' => $_POST['name'],
        'image' => $_POST['image'],
        'discription' => $_POST['discription'],
        'name_err' => '',
        'image_err' => '',
        'discription_err' => '',
        'add' => '', 
    ];
      if (empty($data['name'])) {
          $data['name_err'] = 'name must be filled';
      }
      if (empty($data['image'])) {
          $data['image_err'] = 'image must be filled';
      }
      if (empty($data['discription'])) {
        $data['discription_err'] = 'discirption must be filled';
      }
      if(empty($data['name_err']) && empty($data['image_err']) && empty($data['discription_err'])){
         $done =  $this->categorieModel->edit($data);
         if($done){
          $categorie = $this->categorieModel->getSinglecategorie($id);
          $data = [
            'id' => $categorie->id_cat,
            'name' => $categorie->name_cat,
            'image' => $categorie->Image_cat,
            'discription' => $categorie->discription_cat,
            'name_err' => '',
            'image_err' => '',
            'discription_err' => '',
            'add' => 'Categorie edited succesfuly', 
        ];
        $this->view('pages/editcategorie', $data);
         }
      }else{
        $data['Add'] = 'something went wrong !';
      $this->view('pages/editcategorie', $data);
      }
}
$categorie = $this->categorieModel->getSinglecategorie($id);
$data = [
  'id' => $categorie->id_cat,
  'name' => $categorie->name_cat,
  'image' => $categorie->Image_cat,
  'discription' => $categorie->discription_cat,
  'name_err' => '',
  'image_err' => '',
  'discription_err' => '',
  'add' => ''
  ];

$this->view('pages/editcategorie', $data);
}
public function deletecat($id = null){
  if($id ==null || $this->categorieModel->getSinglecategorie($id) == null){
    redirect('dashboard');
  }
  $done = $this->categorieModel->delete($id);
  if($done){
    $categorie = $this->categorieModel->getCategories();
    $data=[
      'delete' => 'Categorie deleted succesfuly',
      'categorie' => $categorie
    ];
    $this->view('pages/categories', $data);
  }else{
    $data=[
      'delete' => 'Something went wrong'
    ];
    $this->view('pages/categories', $data);
  }
}
public function addproduct(){
$categorie = $this->dashboardModel->getcategories();
$data = [
  'add' => '',
  'categories' => $categorie 
  ];
$this->view('pages/addproduct', $data);
}
public function editpro($id = null){
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //process form
    $data = [
         'id' => $id,
        'name' => $_POST['name'],
        'brand' => $_POST['brand'],
        'image' => $_POST['image'],
        'discription' => $_POST['discription'],
        'howto' => $_POST['howto'],
        'name_cat' => $_POST['categorie'],
        'id_cat' => '',
        'name_err' => '',
        'image_err' => '',
        'discription_err' => '',
        'howto_err' => '',
        'categorie_err' => '',
        'add' => '', 
    ];
      if (empty($data['name'])) {
          $data['name_err'] = 'name must be filled';
      }
      if (empty($data['image'])) {
          $data['image_err'] = 'image must be filled';
      }
      if (empty($data['discription'])) {
        $data['discription_err'] = 'discirption must be filled';
      }
      if (empty($data['howto'])) {
        $data['howto_err'] = 'image must be filled';
    }
      if(empty($data['name_err']) && empty($data['image_err']) && empty($data['discription_err']) && empty($data['howto_err'])){
        $done =  $this->dashboardModel->edit($data);
        if($done){
        $categorie = $this->dashboardModel->getcategories();
        $product = $this->dashboardModel->getSingleProduct($id);
        $data = [
        'id' => $product->id,
        'name' => $product->name,
        'brand' => $product->brand,
        'image' => $product->Image,
        'discription' => $product->discription,
        'howto' => $product->HowTo,
        'name_cat' => $product->name_cat,
        'id_cat' => $product->id_cat,
        'name_err' => '',
        'image_err' => '',
        'discription_err' => '',
        'howto_err' => '',
        'categorie_err' => '',
        'categories' => $categorie,
        'add' => 'Product edited succesfuly', 
        ];
        $this->view('pages/editproduct', $data);
         }
      }else{
        $data['Add'] = 'something went wrong !';
      $this->view('pages/editproduct', $data);
      }
}
$product = $this->dashboardModel->getSingleProduct($id);
$categorie = $this->dashboardModel->getcategories();
$data = [
  'id' => $product->id,
  'name' => $product->name,
  'brand' => $product->brand,
  'image' => $product->Image,
  'discription' => $product->discription,
  'howto' => $product->HowTo,
  'name_cat' => $product->name_cat,
  'id_cat' => $product->id_cat,
  'name_err' => '',
  'image_err' => '',
  'discription_err' => '',
  'howto_err' => '',
  'categorie_err' => '',
  'add' => '',
  'categories' => $categorie
  ];

$this->view('pages/editproduct', $data);
}
public function deletepro($id = null){
  if($id ==null || $this->dashboardModel->getSingleProduct($id) == null){
    redirect('dashboard');
  }
  $done = $this->categorieModel->delete($id);
  $products = $this->dashboardModel->getProducts();
  if($done){
    $data = [  
  'delete' => 'Product deleted succesfuly',
  'products' => $products ,
  ];
$this->view('pages/products', $data);
  }else{
    $data=[
      'delete' => 'Something went wrong',
      'products' => $products ,
    ];
    $this->view('pages/products', $data);
  }
}
  }