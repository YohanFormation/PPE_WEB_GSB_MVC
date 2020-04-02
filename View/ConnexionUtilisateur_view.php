
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Connexion</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"><link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css'>
<link rel='stylesheet' href='https://cdn.materialdesignicons.com/1.1.34/'><link rel="stylesheet" href="..\css\styleConnexion.css">

</head>
<body>
<!-- partial:index.partial.html -->
<body ng-app="mainModule" ng-controller="mainController">
<div id="login-page" class="row">
    <div class="col s12 z-depth-6 card-panel">
      <form class="login-form" action="..\index.php?action=connect" method="POST">
        <div class="row">
        </div>
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">mail_outline</i>
            <input class="validate" id="email" type="email" name="email">
            <label for="email" data-error="wrong" data-success="right">Email</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <i class="material-icons prefix">lock_outline</i>
            <input id="password" type="password" name="password">
            <label for="password">Mot de passe</label>
          </div>
        </div>
        <div class="row">          
          <div class="input-field col s12 m12 l12  login-text">
              <input type="checkbox" id="remember-me" />
              <label for="remember-me">Se souvenir de moi</label>
          </div>
        </div>
        <div class="row">
          <div>
            <input type="submit" id="submit" value="Connexion" class="btn waves-effect waves-light col s12">
          </div>
        </div>

      </form>
    </div>
  </div> </body>
<!-- partial -->
  <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js'></script><script  src="js/script.js"></script>

</body>
</html>


<?php 



?>

