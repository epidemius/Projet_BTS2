<?php
session_start();
?>
<!doctype html>
<html>
<meta charset="UTF-8">
<link rel="stylesheet" href="admin.css" >
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<head>
</head>
<body>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
<h1 class="display-4">Bienvenue Admin </h1>
<br>
</div>
</div>

<?php

try {
  $base = new PDO('mysql:host=localhost; dbname=projet_bdd; charset=UTF8', 'root', '');
}
catch(exception $e) {
  die('Erreur '.$e->getMessage());
}


?>
<nav>
  <ul>
    <li class="deroulant"><a href="#">Gérer les stocks &ensp;</a>
      <ul class="sous">
      <li><a href="Liste_Produits.php">Liste des Produits</a></li>
      <li><a href="Resultats/noteParCand.php">Rajouter des Produits </a></li>
      <li><a href="Resultats/noteParCand.php">Modifiers les produits</a></li>
        
      </ul>
    </li>
    <li class="deroulant"><a href="#">Gérer les clients &ensp;</a>
      <ul class="sous">
        <li><a href="Liste_Client.php">Listes des clients</a></li>
        <li><a href="Resultats/noteParCand.php">Modifications des clients</a></li>
        <li><a href="ajClient.php">Ajouts d'un clients</a></li>
        <li><a href="Liste_ticket.php">Listes des tickets</a></li>
      </ul>
    </li>
  </ul>
</nav>



</body>
</html>
