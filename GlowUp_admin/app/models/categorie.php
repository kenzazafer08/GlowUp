<?php
class categorie
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }


    public function getSinglecategorie($id){
        $this->db->query('SELECT *  from categorie WHERE id_cat = :id');
        $this->db->bind('id' , $id);
        $this->db->execute();
        return $this->db->single();
    }
    
    public function getCategories()
    {
        $this->db->query('SELECT *  from categorie');
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function addCategorie($categorie)
    {
        $this->db->query("INSERT INTO categorie(name , image , description) VALUES (:name , :image ,:description)");
        $this->db->bind("name", $categorie['name']);
        $this->db->bind("image", $categorie['Image']);
        $this->db->bind("description", $categorie['desc']);
        $this->db->execute();
        if($this->db->rowCount() < 1){
            return false;
        }
        return true;
    }

    public function edit($categorie)
    {
        $this->db->query('UPDATE categorie SET name = :name , image = :image ,description = :description , id_cat = :id_cat  WHERE id_cat = :id');
        $this->db->bind('id' , $categorie['id']);
        $this->db->bind("name", $categorie['name']);
        $this->db->bind("image", $categorie['image']);
        $this->db->bind("description", $categorie['description']);
        $this->db->execute();
        if($this->db->rowCount() < 1){
            return false;
        }
        return true;
    }

    public function delete($id)
    {
        $this->db->query('DELETE FROM categorie WHERE id_prod = :id');
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