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
        $this->db->query('SELECT *  from produit JOIN categorie on produit.categorie = categorie.id_cat WHERE id = :id');
        $this->db->bind('id' , $id);
        $this->db->execute();
        return $this->db->single();
    }
}
