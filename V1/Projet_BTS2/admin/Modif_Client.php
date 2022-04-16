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
<h1 class="display-4">Modification du client</h1>
<?php
try {
    $base = new PDO('mysql:host=localhost; dbname=projet_bdd; charset=UTF8', 'root', '');
  }
  catch(exception $e) {
    die('Erreur '.$e->getMessage());
  }
  $line = "SELECT * FROM `client` WHERE `id` = '".$_POST["check_list"][0]."'";
  $result=$base->query($line);
  $row = $result->fetchAll(PDO::FETCH_ASSOC);
  $_SESSION["id_Client"] = $row[0]['id'];
  ?>
  </div>
  </div>
  <form action="Modif_Client_Recap.php" method="post">
  <?php
  
    echo( "
    <label for=\"Nom\">Nom du client : " .$row[0]['Nom']." -> </label>
    <input type=\"Nom\" name=\"Nom\" id=\"Nom\" value=".$row[0]['Nom']."> <br>");
    echo( "
    <label for=\"Prenom\">Prenom : " .$row[0]['Prenom']." -> </label>
    <input type=\"Prenom\" name=\"Prenom\" id=\"Prenom\" value=".$row[0]['Prenom']."> <br>");
    echo( "
    <label for=\"Mail\">Mail : " .$row[0]['Mail']." -> </label>
    <input type=\"Mail\" name=\"Mail\" id=\"Mail\" value=".$row[0]['Mail']."> <br>");
    echo( "
    <label for=\"Fidele\">Fidele : ".$row[0]['Fidele']." -></label> 
    <select name=\"Fidele\" id=\"Fidele\" value=".$row[0]['Fidele'].">
    <option value=\"0\">O</option>
    <option value=\"1\">1</option>
    </select> <br>");
    echo( "
    <label for=\"mdp\">Mot de passe : " .$row[0]['mdp']." -> </label>
    <input type=\"mdp\" name=\"mdp\" id=\"mdp\" value=".$row[0]['mdp']."> <br>");
    echo( "
    <label for=\"notif\">notification : ".$row[0]['notif']." -></label> 
    <select name=\"notif\" id=\"notif\" value=".$row[0]['notif'].">
    <option value=\"0\">O</option>
    <option value=\"1\">1</option>
    </select> <br>");
    
  ?>
  <br>
<br>
 </div>
 <?php
 echo("<input type=\"submit\" class=\"btn btn-outline-success\" value=\"submit\" name=\"submit\">
 ")

 ?>
<a href="admin.php" ><input type="button" class="btn btn-secondary" value="Retour" name="Retour"></a>
</form>


  </body>
  </html>