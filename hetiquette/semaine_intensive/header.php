<?php 
try {
    $conn = new PDO('mysql:dbname=test;host=127.0.0.1;charset=UTF8', 'root', 'root');
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="styles/reset.css">
	<link rel="stylesheet" href="styles/style.css">
	<title>Accueil</title>
</head>