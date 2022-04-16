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
<h1 class="display-4">Liste des tickets</h1>
<?php
try {
    $base = new PDO('mysql:host=localhost; dbname=projet_bdd; charset=UTF8', 'root', '');
  }
  catch(exception $e) {
    die('Erreur '.$e->getMessage());
  }
  $line = "SELECT * FROM `historique_ticket`";
  $result=$base->query($line);
  $row = $result->fetchAll(PDO::FETCH_ASSOC);
  $Nrow = count($row);
  $Nrow = $Nrow - 1;

?>
</h1>
<br>
</div>
</div>
<?php 

$j = 0;

 echo("<table>");
          foreach($row as $Nrow){
           
            echo("<tr>");
            echo("<td> ID :".$row[$j]['id_ticket']."</td>");
            echo("<td> Nom  :".$row[$j]['id_produit']."</td>");
            echo("<td> Prix  :".$row[$j]['Prix_Tot']." €</td>");
            echo("<td> Mail :".$row[$j]['Send']."</td>");
            echo("<td> Fidèle :".$row[$j]['id_client']."</td>");
            echo("</tr>");
        
            $j = $j + 1;
          }
          echo("</table>");
           
 ?>

 
<a href="admin.php" ><input type="button" class="btn btn-secondary" value="Retour" name="Retour"></a>
</body>
</html>