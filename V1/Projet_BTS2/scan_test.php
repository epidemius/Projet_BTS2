<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" >
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
<h1 class="display-4">Scan test </h1>
<br>
<?php
session_start();
  try {
    $base = new PDO('mysql:host=localhost; dbname=projet_bdd; charset=UTF8', 'root', '');
  }
  catch(exception $e) {
    die('Erreur '.$e->getMessage());
  }

$line = "SELECT * FROM `admin`";
$result=$base->query($line);
$row = $result->fetchAll(PDO::FETCH_ASSOC);
$Admin_Co = 0;

if($_POST["id"] == $row[0]["identifiant"] && $_POST["mdp"] == $row[0]["password"] ){
  print(" coucou admin");
  echo("<br>");
  $Admin_Co = 1;

}
else{
  print("vous n'etes pas admin");
  echo("<br>");
  $Admin_Co = 0;
  $line = "SELECT `Mail` FROM `client` WHERE `Mail` = '".$_POST["id"]."'";
$result=$base->query($line);
$row = $result->fetchAll(PDO::FETCH_ASSOC);
$_SESSION["Mail"] = $row;
$line = "SELECT `mdp` FROM `client` WHERE `mdp` = '".$_POST["mdp"]."'";
$result=$base->query($line);
$row = $result->fetchAll(PDO::FETCH_ASSOC);
$_SESSION["mdp"] = $row;
$line = "SELECT `Prenom` FROM `client` WHERE `Mail` = '".$_POST["id"]."'";
$result=$base->query($line);
$row = $result->fetchAll(PDO::FETCH_ASSOC);
echo("<h4> Bonjour ".$row[0]["Prenom"]."</h4>");
$_SESSION["Prenom"] = $row[0]["Prenom"];
}

$j= 0 ;

if($Admin_Co == 0){

}



  ?>
<div class="form-group">
   <label for="NomGroupe">Entrée des id pour simuler le lecteur RFID ( max 9 )</label> 
</div>
</div>
</div>
<form action=Crea_ticket.php method="post">
    <input type="text" name="1" id="N1" /><br/> <br/>
    <input type="text" name="2" id="N2" /><br/> <br/>
    <input type="text" name="3" id="N3" /><br/> <br/>
    <input type="text" name="4" id="N4" /><br/> <br/>
    <input type="text" name="5" id="N5" /><br/> <br/>
    <input type="text" name="6" id="N6" /><br/> <br/>
    <input type="text" name="7" id="N7" /><br/> <br/>
    <input type="text" name="8" id="N8" /><br/> <br/>
    <input type="text" name="9" id="N9" /><br/> <br/>
<input type="submit" value="Création du ticket " name="Submit">
</form>
</div>
</body>