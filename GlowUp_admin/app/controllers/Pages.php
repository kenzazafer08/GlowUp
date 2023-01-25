<?php
  class Pages extends Controller {
    private $userModel;
    public function __construct(){
     $this->userModel = $this->model('user');
    } 
    public function index(){
      // Check the request method
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
       //process form
       $data = [
           'username' => $_POST['username'],
           'password' => $_POST['password'],
           'username_err' => '',
           'password_err' => '', 
       ];

         //Validate username
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
                 //Create session 
                 $this->createUserSession($loggedInUser->username);
                 $_SESSION['username'] = $data['username'];
                 $this->createUserSession($loggedInUser);
             }else{
                 $data['password_err'] = "Password is incorrect";
                 $this->view('pages/index',$data);
             }
         } else {
             // Load view with errors 
             $this->view('pages/index', $data);
         }
     } else {
         //init data 
         $data = [
             'username' => '',
             'password' => '',
             'username_err' => '',
             'password_err' => '',
         ];
         //load form
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
  }