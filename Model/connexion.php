<?php 

class  Connexion
{   
    public $connexion;     

        function __construct(){
            $connexion = new PDO("mysql:host=localhost;dbname=stock_ppe","root","");
            return $connexion;
        }
        
        function getConnexion(){
            return $this->connexion;
        }
}
?>
