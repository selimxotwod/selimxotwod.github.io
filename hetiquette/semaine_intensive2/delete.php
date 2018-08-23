<?php 
try {
    $conn = new PDO('mysql:dbname=test;host=127.0.0.1;charset=UTF8', 'root', 'root');
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
?>
<?php



$req = $conn->prepare('DELETE FROM `s_intensive` WHERE id=?');
$req->execute(array($_GET['billet']));

$req->closeCursor();
header('Location: index.php');
?>