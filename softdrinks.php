<?php
session_start();

$pdo = mysqli_connect("localhost", "root", "", "users");
//mysqli_set_charset($link, $charset);

$statement = $pdo->prepare("SELECT Image FROM produkte WHERE ArtikelID = 1");
$statement->execute();

$result = $statement->get_result();

$bild = $result->fetch_assoc();

//$user = $statement->fetch();

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="UTF-8">
  <title>Auto</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Bitnami: Open Source. Simplified</title>
  <link href="Webshop.css" media="all" rel="Stylesheet" type="text/css" />

   <script src="java.js"></script>
   <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
<div id="header">
<img id="logo" src="../img/heart.png"/>
</div>
<ul list-style-type:none>
  <li><a class="active" href="homepage.php">Startseite</a></li>
  <li><a href="Alkohol.php">Alkohole</a></li>
    <ul> </ul>


  <li><a href="softdrinks.php">Softdrinks</a></li>

  <li style="float:right"><a href="registrieren.php">Registrieren</a></li>
  <li style="float:right"><a href="login.php">Anmelden</a></li>
</ul>

<div id ="topseller">

    <a style="display:block" href="produkt.php?id=3">
    <div class="top">
    <img src="../img/cola.jpg" width = "100" length ="100"/>
    <p> Coca-Cola </p>
  </div>
</a>

  <a style="display:block" href="produkt.php?id=4">
  <div class="top">
<img src="../img/corona.jpg" width = "100" length ="100"/>
    <p> Corona </p>
  </div>
</a>

<div>



</body>
</html>
