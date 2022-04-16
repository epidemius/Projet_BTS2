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
<h1 class="display-4">Récapitulatif des changement du client</h1>
<?php
try {
    $base = new PDO('mysql:host=localhost; dbname=projet_bdd; charset=UTF8', 'root', '');
  }
  catch(exception $e) {
    die('Erreur '.$e->getMessage());
  }

?>
  </div>
  </div>
  <div  class="alert alert-primary" role="alert">
      <?php

      echo("<table>");
echo("<tr>");
echo("<td> Nom :".$_POST["Nom"]."</td>");
echo("<td> Prenom :".$_POST["Prenom"]."</td>");
echo("<td> Mail :".$_POST["Mail"]."</td>");
echo("<td> Fidele :".$_POST["Fidele"]."</td>");
echo("<td> Mot de passe :".$_POST["mdp"]."</td>");
echo("<td> Notification :".$_POST["notif"]."</td>");
echo("</tr>");
echo("</table>");


$line = "UPDATE `client` SET `Nom` = '".$_POST["Nom"]."' WHERE `client`.`id` = ".$_SESSION["id_Client"].";";
$base->query($line);

$line = "UPDATE `client` SET `Prenom` = '".$_POST["Prenom"]."' WHERE `client`.`id` = ".$_SESSION["id_Client"].";";
$base->query($line);

$line = "UPDATE `client` SET `Mail` = '".$_POST["Mail"]."' WHERE `client`.`id` = ".$_SESSION["id_Client"].";";
$base->query($line);

$line = "UPDATE `client` SET `Fidele` = '".$_POST["Fidele"]."' WHERE `client`.`id` = ".$_SESSION["id_Client"].";";
$base->query($line);

$line = "UPDATE `client` SET `mdp` = '".$_POST["mdp"]."' WHERE `client`.`id` = ".$_SESSION["id_Client"].";";
$base->query($line);

$line = "UPDATE `client` SET `notif` = '".$_POST["notif"]."' WHERE `client`.`id` = ".$_SESSION["id_Client"].";";
$base->query($line);


unset($_SESSION["id_Client"]);
      ?>
  </div>
</div>
<a href="admin.php" ><input type="button" class="btn btn-secondary" value="Retour" name="Retour"></a>
</body>
</html>