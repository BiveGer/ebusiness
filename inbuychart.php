<?php
session_start();

$pdo = mysqli_connect("localhost", "root", "", "users");
//mysqli_set_charset($link, $charset);

$produkt = $_GET["id"];
$statement = $pdo->prepare("INSERT INTO warenkorb('WarenkorbID', 'KundenID', 'ArtikelID', 'Status')
VALUES ([value-1],[value-2],[value-3],[value-4])");

$statement->execute();

$result = $statement->get_result();
$bild = $result->fetch_assoc();

if(isset($_POST['sent'])){
	// ...
}

?>
