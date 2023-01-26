<?php 
class user{
    private $db;
    
    public function __construct(){
        $this->db = new Database;
    }
    public function login($username, $password){
        $this->db->query("SELECT * FROM admin WHERE username = :username");
        $this->db->bind('username', $username);

        $this->db->execute();

        $row = $this->db->single();
        $userPass = $row->password;
        if( $password === $userPass){
            return $row;
        }
        return false;

    }
    public function findUserByUsername($username){
        $this->db->query('SELECT * FROM admin WHERE username = :username');
        $this->db->bind('username', $username);

        $this->db->single();

        if($this->db->rowCount() > 0){
            return true;
        }
        return false;
    }
}