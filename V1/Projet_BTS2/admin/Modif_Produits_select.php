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
<h1 class="display-4">Liste des produits</h1>
<?php
try {
    $base = new PDO('mysql:host=localhost; dbname=projet_bdd; charset=UTF8', 'root', '');
  }
  catch(exception $e) {
    die('Erreur '.$e->getMessage());
  }
  $line = "SELECT * FROM `produit`";
  $result=$base->query($line);
  $row = $result->fetchAll(PDO::FETCH_ASSOC);
  $Nrow = count($row);
  $Nrow = $Nrow - 1;
  

?>
</h1>
<br>
</div>
</div>
<form action="Modif_Produit.php" method="post">
<?php 

$j = 0;
 echo("<table>");
          foreach($row as $Nrow){
           
            echo("<tr>");
            echo("<td> ID :".$row[$j]['id_Produit']."</td>");
            echo("<td> Nom  :".$row[$j]['Nom_Produit']."</td>");
            echo("<td> Prix  :".$row[$j]['Prix']." €</td>");
            echo("<td> Nutriscore :".$row[$j]['Nutriscore']."</td>");
            echo("<td><label class=\"checkbox-inline\"><input type=\"checkbox\" name=\"check_list[]\" value=".$row[$j]['id_Produit']." </label></td>");
            echo("</tr>");
        
            $j = $j + 1;
          }
          echo("</table>");
          
 ?>
  <input type="submit" class="btn btn-outline-success" value="submit" name="submit">
</form>
<a href="admin.php" ><input type="button" class="btn btn-secondary" value="Retour" name="Retour"></a>
</body>
</html>