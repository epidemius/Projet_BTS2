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
<h1 class="display-4">Modification du produit</h1>
<?php
try {
    $base = new PDO('mysql:host=localhost; dbname=projet_bdd; charset=UTF8', 'root', '');
  }
  catch(exception $e) {
    die('Erreur '.$e->getMessage());
  }
  $line = "SELECT * FROM `produit` WHERE `id_Produit` = '".$_POST["check_list"][0]."'";
  $result=$base->query($line);
  $row = $result->fetchAll(PDO::FETCH_ASSOC);
  //var_dump($row);
  $_SESSION["id_Produit"] = $row[0]['id_Produit'];
  print_r($_SESSION["id_Produit"]);
  ?>
  </div>
  </div>
  <form action="Modif_Produit_Recap.php" method="post">
  <?php
    echo( "
    <label for=\"Nom_Produit\">Nom_Produit : " .$row[0]['Nom_Produit']." -> </label>
    <input type=\"Nom_Produit\" name=\"Nom_Produit\" id=\"Nom_Produit\" value=".$row[0]['Nom_Produit']."> <br>");
    echo( "
    <label for=\"Prix\">Prix : " .$row[0]['Prix']." -> </label>
    <input type=\"Prix\" name=\"Prix\" id=\"Prix\" value=".$row[0]['Prix']."> <br>");
    echo( "
    <label for=\"Nutriscore\">Nutriscore : ".$row[0]['Nutriscore']." -></label> 
    <select name=\"Nutriscore\" id=\"Nutriscore\" value=".$row[0]['Nutriscore'].">
    <option value=\"A\">A</option>
    <option value=\"B\">B</option>
    <option value=\"C\">C</option>
    <option value=\"D\">D</option>
    <option value=\"E\">E</option>
    </select> <br>");
  ?>
  <br>
<br>
 </div>
 <?php
 echo("<input type=\"submit\" class=\"btn btn-outline-success\" value=\"submit\" name=\"id\">
 ")

 ?>
<a href="admin.php" ><input type="button" class="btn btn-secondary" value="Retour" name="Retour"></a>
</form>


  </body>
  </html>