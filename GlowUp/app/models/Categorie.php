<?php
class Categorie
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getCategories()
    {
        $this->db->query('SELECT *  from categorie');
        $this->db->execute();
        return $this->db->resultSet();
    }
    public function getSingleCategorie($id){
        $this->db->query('SELECT *  from Categorie WHERE id = :id');
        $this->db->bind('id' , $id);
        $this->db->execute();
        return $this->db->single();
    }
}