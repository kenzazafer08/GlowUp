<?php
class categorie
{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
    public function getSinglecategorie($id){
        $this->db->query('SELECT *  from categorie WHERE id_cat = :id');
        $this->db->bind('id' , $id);
        $this->db->execute();
        return $this->db->single();
    }   
    public function getCategories(){
        $this->db->query('SELECT *  from categorie');
        $this->db->execute();
        return $this->db->resultSet();
    }
    public function addCategorie($categorie){
        $this->db->query("INSERT INTO categorie(name_cat , image_cat , discription_cat) VALUES (:name , :image ,:description)");
        $this->db->bind("name", $categorie['name']);
        $this->db->bind("image", $categorie['imagepath']);
        $this->db->bind("description", $categorie['discription']);
        $this->db->execute();
        if($this->db->rowCount() < 1){
            return false;
        }
        return true;
    }
    public function edit($categorie){
        $this->db->query('UPDATE categorie SET name_cat = :name , image_cat = :image ,discription_cat = :description WHERE id_cat = :id');
        $this->db->bind('id' , $categorie['id']);
        $this->db->bind("name", $categorie['name']);
        $this->db->bind("image", $categorie['imagePath']);
        $this->db->bind("description", $categorie['discription']);
        $this->db->execute();
        if($this->db->rowCount() < 1){
            return false;
        }
        return true;
    }
    public function delete($id){
        $this->db->query('DELETE FROM categorie WHERE id_cat = :id');
        $this->db->bind('id' , intval($id));
        $this->db->execute();
        if($this->db->rowCount() < 1){
            return false;
        }
        return true;
    }
    public function countcategorie(){
        $this->db->query('select count(*) as total from categorie');
        return $this->db->count();
    }
}