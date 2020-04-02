<?php

include('.\Model\connexion.php');

class TestConnexion{
     
    public function login($login, $mdp){
    $_SESSION['isConnect'] = FALSE;
    include('.\Model\connexion.php');
    $requete = $connexion->prepare("SELECT * FROM utilisateur WHERE Email = ? AND Mdp = ? ");
    $requete->execute(array($login, $mdp));
    while ($data = $requete->fetch()){
        $_SESSION['isConnect'] = TRUE;
        $_SESSION['User'] = $data['id'];
        require_once('View\ConnexionUtilisateur_view.php');
        header('Location: .\View\ConnexionUtilisateur_view.php');
        exit();
        }
    }
}


?>