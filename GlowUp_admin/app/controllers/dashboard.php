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
  $categories = $this->categorieModel->getCategories();
  $data = [  
  'delete' => '',
  'products' => $products ,
  'categories' => $categories
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
    $data = [
        'name' => $_POST['name'],
        'image' => $_FILES['image'],
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
        $data +=['imagepath' => $this->uploadImage($_FILES['image'])];
        if($data['imagepath'] !=null){
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
         }else{
        $data['add'] = 'something went wrong !';
      $this->view('pages/addcategorie', $data);
        }
      }else $data['image_err'] = 'File is not an image.';
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
  if($id ==null || $this->categorieModel->getSinglecategorie($id) == null){
    redirect('dashboard');
  }
  $categorie = $this->categorieModel->getSinglecategorie($id);

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //process form
    $data = [
         'id' => $id,
        'name' => $_POST['name'],
        'image' => $_FILES['image'],
        'discription' => $_POST['discription'],
        'name_err' => '',
        'image_err' => '',
        'discription_err' => '',
        'add' => '', 
    ];
      if (empty($data['name'])) {
          $data['name_err'] = 'name must be filled';
      }
      
      if (empty($data['discription'])) {
        $data['discription_err'] = 'discirption must be filled';
      }
      if(empty($data['name_err'])  && empty($data['discription_err'])){
        if(!empty($_FILES['image']['name'])){
          $data+=[
            'imagePath' => $this->uploadImage($_FILES['image'])
          ];
        }else{
          $data+=[
            'imagePath' => $categorie->Image_cat
          ];
        }
         $done =  $this->categorieModel->edit($data);
         if($done){
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
  $done_pro = $this->dashboardModel->deletecategorie($id);
  $categorie = $this->categorieModel->getCategories();
  if($done && $done_pro){
    
    $data=[
      'delete' => 'Categorie deleted succesfuly',
      'categorie' => $categorie
    ];
    $this->view('pages/categories', $data);
  }else if($done){
    $data=[
      'categorie' => $categorie,
      'delete' => 'Categorie deleted succesfuly'
    ];
    $this->view('pages/categories', $data);
  }else{
    $data=[
      'categorie' => $categorie,
      'delete' => 'something went wrong'
    ];
    $this->view('pages/categories', $data);
  }
}
public function addproduct(){
  $categorie = $this->categorieModel->getCategories();
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $image = $_FILES['image'];
    for ($i = 0; $i < count($_POST['name']); $i++) {
    //process form
    $image_dir = "./../public/img/upload/";
    move_uploaded_file($image['tmp_name'][$i], $image_dir . $image['name'][$i]);
    $imagepath = $image['name'][$i];
    $data = [
        'name' => $_POST['name'][$i],
        'discription' => $_POST['discription'][$i],
        'brand' => $_POST['brand'][$i],
        'prix' => $_POST['prix'][$i],
        'howto' => $_POST['howto'][$i],
        'categorie' => $_POST['categorie'][$i],
        'imagepath' =>$imagepath,
        'categories' => $categorie,
        'add' => '', 
    ];
    $done =  $this->dashboardModel->addProduct($data);
         if($done){
          $data = [
        'name' => '',
        'image' => '',
        'discription' => '',
        'brand' => '',
        'prix' =>'',
        'howto' => '',
        'categorie' => '',
        'add' => 'Product added succesfuly', 
        ];
        $this->view('pages/Addproduct', $data);
         }
      else{
        $data['add'] = 'something went wrong !';
      $this->view('pages/Addproduct', $data);
      }}
 }
 $data = [
  'name' => '',
  'image' => '',
  'discription' => '',
  'brand' => '',
  'prix' =>'',
  'howto' => '',
  'categorie' => '',
  'categories' => $categorie,
  'add' => '', 
  ];

 $this->view('pages/Addproduct', $data);
}
public function editpro($id = null){
  if($id ==null || $this->dashboardModel->getSingleProduct($id) == null){
    redirect('dashboard');
  }
  $product = $this->dashboardModel->getSingleProduct($id);
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //process form
    $data = [
         'id' => $id,
        'name' => $_POST['name'],
        'brand' => $_POST['brand'],
        'prix' => $_POST['prix'],
        'image' => $_FILES['image'],
        'discription' => $_POST['discription'],
        'howto' => $_POST['howto'],
        'name_cat' => '',
        'id_cat' => $_POST['categorie'],
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
      if (empty($data['brand'])) {
        $data['brand_err'] = 'brand must be filled';
    }
      if (empty($data['discription'])) {
        $data['discription_err'] = 'discirption must be filled';
      }
      if (empty($data['howto'])) {
        $data['howto_err'] = 'image must be filled';
    }
      if(empty($data['name_err'])  && empty($data['discription_err']) && empty($data['howto_err']) && empty($data['brand_err'])){
        if(!empty($_FILES['image']['name'])){
          $data+=[
            'imagepath' => $this->uploadImage($_FILES['image'])
          ];
        }else{
          $data+=[
            'imagepath' => $product->Image
          ];
        }
        $done =  $this->dashboardModel->edit($data);
        if($done){
        $categorie = $this->categorieModel->getcategories();
        $data = [
        'id' => $product->id,
        'name' => $product->name,
        'brand' => $product->brand,
        'prix' => $product->prix,        
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
  $categorie = $this->categorieModel->getcategories();
  $data = [
  'id' => $product->id,
  'name' => $product->name,
  'prix' => $product->prix,
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
  $done = $this->dashboardModel->delete($id);
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
public function uploadImage($image) {
    $image_type = exif_imagetype($image['tmp_name']);
    if($image_type !== false) {
  $image_dir = "./../public/img/upload/";
  move_uploaded_file($image['tmp_name'], $image_dir . $image['name']);
  return $image['name'];
    } else {
    return null;
    }
}
}