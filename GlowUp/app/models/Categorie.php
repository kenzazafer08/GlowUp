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
    public function getSingleCategorie($name){
        $this->db->query('SELECT *  from Categorie WHERE name_cat = :name');
        $this->db->bind('name' , $name);
        $this->db->execute();
        return $this->db->rowCount();
    }
}