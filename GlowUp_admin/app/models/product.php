<?php
class Product
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getProducts()
    {
        $this->db->query('SELECT *  from produit JOIN categorie on produit.categorie = categorie.id_cat');
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getSingleProduct($id){
        $this->db->query('SELECT *  from produit  JOIN categorie on produit.categorie = categorie.id_cat WHERE id = :id');
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
    public function addProduct($product)
    {
        $this->db->query("INSERT INTO produit(name , Image , discription , brand , HowTo , categorie) VALUES (:name , :image ,:description,:brand , :howto ,:categorie)");
        $this->db->bind("name", $product['name']);
        $this->db->bind("image", $product['image']);
        $this->db->bind("description", $product['discription']);
        $this->db->bind("brand", $product['brand']);
        $this->db->bind("howto", $product['howto']);
        $this->db->bind("categorie", $product['categorie']);
        $this->db->execute();
        if($this->db->rowCount() < 1){
            return false;
        }
        return true;
    }
    public function addProducts($product)
    {
        $this->db->query("INSERT INTO produit(name , Image , discription , brand , HowTo , categorie) VALUES (:name , :image ,:description,:brand , :howto ,:categorie),(:name1 , :image1 ,:description1,:brand1 , :howto1 ,:categorie1)");
        $this->db->bind("name", $product['name']);
        $this->db->bind("image", $product['image']);
        $this->db->bind("description", $product['discription']);
        $this->db->bind("brand", $product['brand']);
        $this->db->bind("howto", $product['howto']);
        $this->db->bind("categorie", $product['categorie']);
        $this->db->bind("name1", $product['name1']);
        $this->db->bind("image1", $product['image1']);
        $this->db->bind("description1", $product['discription1']);
        $this->db->bind("brand1", $product['brand1']);
        $this->db->bind("howto1", $product['howto1']);
        $this->db->bind("categorie1", $product['categorie1']);
        $this->db->execute();
        if($this->db->rowCount() < 1){
            return false;
        }
        return true;
    }
    public function edit($product)
    {
        $this->db->query('UPDATE produit SET name = :name , Image = :image ,discription = :description ,HowTo = :howto ,categorie = :id_cat ,brand = :brand WHERE id = :id');
        $this->db->bind('id' , $product['id']);
        $this->db->bind("name", $product['name']);
        $this->db->bind("image", $product['image']);
        $this->db->bind("description", $product['discription']);
        $this->db->bind("howto", $product['howto']);
        $this->db->bind("id_cat", $product['id_cat']);
        $this->db->bind("brand", $product['brand']);
        $this->db->execute();
        if($this->db->rowCount() < 1){
            return false;
        }
        return true;
    }
    public function delete($id)
    {
        $this->db->query('DELETE FROM produit WHERE id = :id');
        $this->db->bind('id' , intval($id));
        $this->db->execute();
        if($this->db->rowCount() < 1){
            return false;
        }
        return true;
    }
    public function deletecategorie($id)
    {
        $this->db->query('DELETE FROM produit WHERE categorie = :id');
        $this->db->bind('id' , intval($id));
        $this->db->execute();
        if($this->db->rowCount() < 1){
            return false;
        }
        return true;
    }
    public function countproduct(){
        $this->db->query('select count(*) as total from produit');
        return $this->db->count();
    }
}