<?php 

session_start();


if (isset($_GET['action'])){
    if($_GET['action'] == 'connect'){
        if (isset($_POST['email']) && $_POST['password']){
            require('Controller\ConnexionUtilisateur.php');
            $tryconnect = new TestConnexion;
            $tryconnect->login($_POST['email'], $_POST['password']);
            exit();
        }
    }

    // ...
    if($_GET['action'] == 'profil'){
        exit();
    }
    

    require_once('View\ConnexionUtilisateur_view.php');
    header('Location: .\View\ConnexionUtilisateur_view.php');
    exit();
}else{       
    require_once('View\ConnexionUtilisateur_view.php');
    header('Location: .\View\ConnexionUtilisateur_view.php');
    exit();
   }


    




?>
