<?php 
try {
    $conn = new PDO('mysql:dbname=test;host=127.0.0.1;charset=UTF8', 'root', 'root');
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
?>
<?php
// je prepara ma requete
$id= $_GET['billet'];
$stmt= $conn->prepare("UPDATE `s_intensive` SET marque = :marque, nom = :nom, description = :description, date_edition = :date_edition, prix = :prix WHERE id= $id;");
$stmt->bindParam(':marque' , $_POST['marque'] );
$stmt->bindParam(':nom' , $_POST['nom'] );
$stmt->bindParam(':description' , $_POST['description'] );
$stmt->bindParam(':date_edition' , $_POST['date_edition'] );
$stmt->bindParam(':prix' , $_POST['prix'] );
$stmt->execute();
header('Location: index.php');
// execute la requete

