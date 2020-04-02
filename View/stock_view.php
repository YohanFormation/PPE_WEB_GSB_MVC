<html>
<head>
    <title>STOCK</title>
    <link rel="stylesheet" href=".\css\styleBoarder.css">
    <link rel="stylesheet" href=".\css\styleSearchBar.css">
</head>
<body>

<table border="3" cellspacing="3">
<div class="caption">Stock service informatique </div>
<div class="wrap">

</div>
<div id="table">
	<div class="header-row row">
    <span class="cell primary">ID</span>
    <span class="cell">Libelle</span>
     <span class="cell">Prix</span>
  </div>
<!-- <tr><th>ID</th><th>Libelle</th><th>Prix</th></tr> -->
<?php 
foreach($tab as $ligne){
    $id = $ligne["id"];
    $libelle = $ligne["Libelle"];
    $prix = $ligne["Prix"];
    
    $table = "<div class='row'>
    <input type='radio' name='expand'>
      <span class='cell primary' data-label='id'>$id</span>
      <span class='cell' data-label='libelle'>$libelle</span>
       <span class='cell' data-label='prix'>$prix</span>
    </div>";
    echo $table;
}
?>
</div>
</div>
</table>
</body>
</html>
