<?php
  class Pages extends Controller {
    private $userModel;
    private $categorieModel;
    public function __construct(){
     $this->userModel = $this->model('user');
     $this->categorieModel = $this->model('categorie');
    } 
    public function index(){
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       $data = [
           'username' => $_POST['username'],
           'password' => $_POST['password'],
           'username_err' => '',
           'password_err' => '', 
       ];

         if (empty($data['username'])) {
             $data['username_err'] = 'username must be filled';
         }
         if (empty($data['password'])) {
             $data['password_err'] = 'Password must be filled';
         }

         if(!$this->userModel->findUserByUsername($data['username'])){
             $data['username_err'] = 'User not found';
         }

         if (empty($data['username_err']) && empty($data['password_err'])) {
             $loggedInUser = $this->userModel->login($data['username'], $data['password']);
             if($loggedInUser){
                 $this->createUserSession($loggedInUser);
             }else{
                 $data['password_err'] = "Password is incorrect";
                 $this->view('pages/index',$data);
             }
         } else {
             $this->view('pages/index', $data);
         }
     } else {
         $data = [
             'username' => '',
             'password' => '',
             'username_err' => '',
             'password_err' => '',
         ];
         $this->view('pages/index', $data);
     }
     }
     public function createUserSession($username)
     {
         $_SESSION['username'] = $username;
         redirect('/dashboard');
     }
     public function logout(){
       unset($_SESSION['username']);
       session_destroy();
       redirect('/Pages');
    }
    public function categories(){
        $product = $this->categorieModel->getCategories();  
        $data = json_encode($product);
        echo $data;
        
      }
}