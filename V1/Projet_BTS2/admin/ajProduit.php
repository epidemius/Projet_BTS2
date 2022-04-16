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
<form action="ajProduitRecap.php" method="post">
<div class="jumbotron jumbotron-fluid">
  <div class="container">
  <h1 class="display-4">Ajout d'un produit</h1>
<h1 class="display-4">
    <?php
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
<div  class="alert alert-primary" role="alert">
<div class="text">
  
   <br>
   <label for="Nom_Prod">Nom du produit :</label> 
   <input type="Nom_Prod" name="Nom_Prod" id="subject" value="">
 
   <br>
   <label for="Prix">Prix :</label> 
   <input type="Prix" name="Prix" id="subject" value="">
  
   <br>
   <label for="Nutriscore">Nutriscore :</label> 
   <select name="Nutriscore" id="Nutriscore" value="">
   <option value="A">A</option>
   <option value="B">B</option>
   <option value="C">C</option>
   <option value="D">D</option>
   <option value="E">E</option>
   </select>
<br>
<br>
 </div>
<input type="submit" class="btn btn-outline-success" value="submit" name="submit">
</form>

<a href="admin.php" ><input type="button" class="btn btn-secondary" value="Retour" name="Retour"></a>
</body>
</html>