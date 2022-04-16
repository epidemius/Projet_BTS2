<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head><?php
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
<h1 class="display-4">Login page</h1>
<div class="form-group">
<form action=scan_test.php method="post">
<h2>Veuillez vous identifier s'il vous plaît </h2>
<br>
<h4> identifiant </h4>
<form action=scan_test.php method="post">
<input type="text" name="id" id="id-client" /><br/> <br/>
<h4> mot de passe  </h4>
<input type="text" name="mdp" id="mdp_client" /><br/> <br/>

<input type="submit" value="Connecter" name="Submit">
</form>
</div>
</body>