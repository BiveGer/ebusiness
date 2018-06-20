<?php
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=users', 'root', '');
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
  <li><a class="active" href="produkt.php">Startseite</a></li>
  <li><a href="Alkohol.html">Alkohole</a></li>
  <li><a href="#contact">Softdrinks</a></li>
  <li></li>
  <li></li>
  <li style="float:right"><a href="registrieren.php">Registrieren</a></li>
  <li style="float:right"><a href="login.php">Anmelden</a></li>
</ul>

<div id ="topseller">

    <a style="display:block" href="produkt.php?id=2">
    <div class="top">
    <img src="../img/vodka.jpg" width = "100" length ="100"/>
    <p> Vodka Gorbatschow </p>
  </div>
</a>

  <a style="display:block" href="produkt.php?id=1">
  <div class="top">
<img src="../img/beam.jpg" width = "100" length ="100"/>
    <p> Jim Beam </p>
  </div>
</a>

<div>



</div>



</body>
</html>
