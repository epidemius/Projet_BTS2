<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<?php
session_start();
  try {
    $base = new PDO('mysql:host=localhost; dbname=projet_bdd; charset=UTF8', 'root', '');
  }
  catch(exception $e) {
    die('Erreur '.$e->getMessage());
  }
  ?>
<body>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
<h1 class="display-4">Envoie du ticket
<?php
echo("<h4> Bonjour ".$_SESSION["Prenom"]."</h4>"); 
?>
</h1>
<div class="form-group">
   <label for="NomGroupe">Envoi du ticket a la base de donnée</label> 
<form action=Crea_ticket.php method="post">
</div>
</div>
</div>
<br>
<php?
<?php



$k = 0;
$id_Produit;
// bug a réglé ici
$line = "SELECT `Prix` FROM `produit` WHERE `Nom_Produit` = '".$_SESSION["produit"][0][0]["Nom_Produit"]."'";
$result=$base->query($line);
$row[0] = $result->fetchAll(PDO::FETCH_ASSOC);
  echo(" X1 ".($_SESSION["produit"][$k][0]["Nom_Produit"])." Prix : ".$row[$k][0]["Prix"]."€ <br>");
  $line = "SELECT `id_Produit` FROM `produit` WHERE `Nom_Produit` = '".$_SESSION["produit"][0][0]["Nom_Produit"]."'";
$result=$base->query($line);
$row[0] = $result->fetchAll(PDO::FETCH_ASSOC);

// Concatenation à finir
$id_Produit[0] = strval($row[0][0]["id_Produit"]);
print($id_Produit);

while($k < $_SESSION["compteur"])
{
 print($k);
  $line = "SELECT `Prix` FROM `produit` WHERE `Nom_Produit` = '".$_SESSION["produit"][$k][0]["Nom_Produit"]."'";
$result=$base->query($line);
$row[$k] = $result->fetchAll(PDO::FETCH_ASSOC);
  echo(" X1 ".($_SESSION["produit"][$k][0]["Nom_Produit"])." Prix : ".$row[$k][0]["Prix"]."€ <br>");
  $k = $k + 1;
}
echo("<br> Prix Total : ".$_SESSION["Prix_Tot"]." € ");


$A = " coucou";
$B = "Jeremy";
$C = $A."/".$B;
print($C);



?>
