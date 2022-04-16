<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<?php
  try {
    $base = new PDO('mysql:host=localhost; dbname=projet_bdd; charset=UTF8', 'root', '');
  }
  catch(exception $e) {
    die('Erreur '.$e->getMessage());
  }
  //print_r($_POST);
  ?>

<body>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
<h1 class="display-4">Résult scan </h1>
<div class="form-group">
   <label for="NomGroupe">Résultats des scans</label> 
</div>
</div>
</div>
<h2>Veuillez vous identifier s'il vous plaît </h2>
<br>
<h4> identifiant </h4>
<form action=Validation.php method="post">
<input type="text" name="id" id="id-client" /><br/> <br/>
<h4> mot de passe  </h4>
<input type="text" name="mdp" id="mdp_client" /><br/> <br/>

<?php

$i = 1;
$compteur = 0;

while($i < count($_POST)){
    if($_POST[$i] == !NULL){
$compteur = $compteur + 1;
    }
    $i ++;
}
$compteur = $compteur + 1 ;
echo ( "<h3> le nombre d'élément scanner est ".$compteur." </h3>");
echo ("<br> <br> ");

$j = 1;
$k = 0;

while($j < $compteur){
$line = " SELECT Nom_Produit FROM `produit` WHERE id_Produit = ".$j."";
$result=$base->query($line);
$row[$k] = $result->fetchAll(PDO::FETCH_ASSOC);
echo ("<h3 >Article ".$j." : ".$row[$k][0]['Nom_Produit']." </h3>");
echo(" <h4 type=\"hidden\" value=".$row[$k][0]['Nom_Produit']." name=\"$j\" id=\"N1\"></h4>");
$j = $j +1;
$k = $k + 1;
}
// var_dump($row)

?>
<input type="submit" value="Créer un nouveau ticket" name="Submit">
</form>



</body>