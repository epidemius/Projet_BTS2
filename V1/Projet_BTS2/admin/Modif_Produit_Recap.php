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
<h1 class="display-4">Récapitulatif des changement du produit</h1>
<?php
try {
    $base = new PDO('mysql:host=localhost; dbname=projet_bdd; charset=UTF8', 'root', '');
  }
  catch(exception $e) {
    die('Erreur '.$e->getMessage());
  }
  var_dump($_POST);
?>
  </div>
  </div>
  <div  class="alert alert-primary" role="alert">
      <?php

      echo("<table>");
echo("<tr>");
echo("<td> Nom Produit :".$_POST ["Nom_Produit"]."</td>");
echo("<td> Prix :".$_POST ["Prix"]."</td>");
echo("<td> Nutriscore :".$_POST ["Nutriscore"]."</td>");
echo("</tr>");
echo("</table>");


$line = "UPDATE `produit` SET `Nom_Produit` = '".$_POST ["Nom_Produit"]."' WHERE `produit`.`id_Produit` = ".$_SESSION["id_Produit"].";";
$base->query($line);

$line = "UPDATE `produit` SET `Prix` = '".$_POST ["Prix"]."' WHERE `produit`.`id_Produit` = ".$_SESSION["id_Produit"].";";
$base->query($line);

$line = "UPDATE `produit` SET `Nutriscore` = '".$_POST ["Nutriscore"]."' WHERE `produit`.`id_Produit` = ".$_SESSION["id_Produit"].";";
$base->query($line);

unset($_SESSION["id_Produit"]);
      ?>
  </div>
</div>
<a href="admin.php" ><input type="button" class="btn btn-secondary" value="Retour" name="Retour"></a>
</body>
</html>