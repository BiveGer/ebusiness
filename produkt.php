<?php
session_start();

$pdo = mysqli_connect("localhost", "root", "", "users");
//mysqli_set_charset($link, $charset);

$produkt = $_GET["id"];
$statement = $pdo->prepare("SELECT Image FROM produkte WHERE ArtikelID = $produkt");

$statement->execute();

$result = $statement->get_result();
$bild = $result->fetch_assoc();

$statement2 = $pdo->prepare("SELECT Beschreibung FROM produkte WHERE ArtikelID = $produkt");
$statement2->execute();

$var = $statement2->get_result();
$text = $var->fetch_assoc();

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
  <li><a href="softdrinks.php">Softdrinks</a></li>
  <li></li>
  <li></li>
  <li style="float:right"><a href="registrieren.php">Registrieren</a></li>
  <li style="float:right"><a href="login.php">Anmelden</a></li>
</ul>

<div class="top">

  <img src="<?php echo $bild['Image'] ?>" width="100" length = "100"/>
</div>

<div class="top">
  <p> <?php echo $text['Beschreibung'] ?> </p>
</div>

<div>

  <form method="post" action="inbuychart.php?id= <?php $produkt['ArtikelID'] ?>">
  	<input type="submit" name="In den Warenkorb">
  </form>

</div>

</body>
</html>
