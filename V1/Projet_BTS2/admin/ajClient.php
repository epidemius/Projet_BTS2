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
<form action="ajClientRecap.php" method="post">
<div class="jumbotron jumbotron-fluid">
  <div class="container">
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
   <label for="Nom">Nom :</label> 
   <input type="Nom" name="Nom" id="subject" value="">
 
   <br>
   <label for="Prenom">Prenom :</label> 
   <input type="Prenom" name="Prenom" id="subject" value="">
  
   <br>
   <label for="Mail">Mail :</label> 
   <input type="Mail" name="Mail" id="subject" value="">
   
   <br>
   <label for="Fidele">Fidele :</label> 
   <input type="Fidele" name="Fidele" id="subject" value="">
  
   <br>
   <label for="Mdp">Mot de passe :</label> 
   <input type="password" name="Mdp" id="subject" value="">
  
   <br>
   <label for="Notif">Notif :</label> 
   <input name="Notif" id="Notif" value="">

   </select>
<br>
<br>
 </div>
<input type="submit" class="btn btn-outline-success" value="submit" name="submit">
</form>

<a href="admin.php" ><input type="button" class="btn btn-secondary" value="Retour" name="Retour"></a>
</body>
</html>