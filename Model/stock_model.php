<?php 

Class Stock{
    public function findAll()
    {
        include("connexion.php");
        $query = "select * from materiel";
        $result = $connexion->query($query);
        $tab = $result->fetchAll();
        return $tab;
    }
    public function Contient($char)
    {
        include("connexion.php");
        $query = "select * from materiel where libelle like '%$char%'";
        $result = $connexion->query($query);
        $tab = $result->fetchAll();
        return $tab;
    }
}




?>