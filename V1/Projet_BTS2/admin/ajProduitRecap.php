<?php
session_start();
?>
<!doctype html>
<html>
<meta charset="UTF-8">
<link rel="stylesheet" href="admin.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<head>
</head>
<body>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
  <h1 class="display-4">Récapitulatif de l'ajout du produit</h1>
<h1 class="display-4"><?php
try {
    $base = new PDO('mysql:host=localhost; dbname=projet_bdd; charset=UTF8', 'root', '');
  }
  catch(exception $e) {
    die('Erreur '.$e->getMessage());
  }
  ?>
</h1>
</div>
</div>
</div>
<div  class="alert alert-primary" role="alert">
<?php
$Nom = $_POST['Nom_Prod'];
$Prix = $_POST['Prix'];
$Nutriscore = $_POST['Nutriscore'];
//var_dump($_POST[$Nutriscore]);

$i = 0;
/*foreach($rowUti as $NUti){
if($Nom == $rowUti[$i]['nom'] ||$Prenom == $rowUti[$i]['Prenom'] ||$Adresse == $rowUti[$i]['Adresse'] ||$Courriel == $rowUti[$i]['courriel']){
  header ('location: http://localhost/TP1/admin/Candidat/ajCandidat.php');
}
$i = $i +1;
}
if($Nom == "" ||$Prenom == "" ||$Adresse == "" ||$Courriel == ""||$Mdp  == ""){
  header ('location: http://localhost/TP1/admin/Candidat/ajCandidat.php');
}
else{
    */
echo("<table>");
echo("<tr>");
echo("<td> Nom :".$Nom."</td>");
echo("<td> Prénom :".$Prix."</td>");
echo("<td> Nutriscore :".$Nutriscore."</td>");
echo("</tr>");
echo("</table>");
$sqlAdd = "INSERT INTO `produit` (`id_Produit`, `Nom_Produit`, `Prix`, `Nutriscore`) VALUES ( NULL, '$Nom', '$Prix', '$Nutriscore')";
$base->query($sqlAdd);
?>
<br>
<a href="ajProduit.php" ><input type="button" class="btn btn-secondary" value="Retour" name="Retour"></a>
</div>
 <form action="admin.php">
 <input type="submit" value="Valider" name="Retour">
</body>
</html>