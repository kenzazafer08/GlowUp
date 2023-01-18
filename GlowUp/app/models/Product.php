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
        $this->db->query('SELECT *  from products JOIN categories on products.categorie = categories.id');
        $this->db->execute();
        return $this->db->resultSet();
    }
    public function getSingleProduct($id){
        $this->db->query('SELECT *  from products JOIN categories on products.id_cat = categories.id_cat WHERE id_prod = :id');
        $this->db->bind('id' , $id);
        $this->db->execute();
        return $this->db->single();
    }
}
