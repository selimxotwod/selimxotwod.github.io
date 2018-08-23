<?php 
try {
    $conn = new PDO('mysql:dbname=test;host=127.0.0.1;charset=UTF8', 'root', 'root');
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}
?>
<?php

	$name =$_FILES["myfile"]["name"];
    $type =$_FILES["myfile"]["type"];
    $type =$_FILES["myfile"]["size"];
    $temp =$_FILES["myfile"]["tmp_name"];
    $error =$_FILES["myfile"]["error"];

    if ($error > 0) 
          die("Error uploading file! Code $error.");
    else{
          move_uploaded_file($temp, "img/".$name);

    }

$sql = "INSERT INTO `s_intensive` ( `marque` , `nom`,`description`,`image`,`date_creation`,`date_edition`,`prix`,`genre` ) VALUE ( :marque , :nom, :description, :image, :date_creation, :date_edition, :prix, :genre);";
$stmt = $conn->prepare($sql);
// rajoute les valeurs a la requete preparee
$stmt->bindParam(':marque' , $_POST['marque'] );
$stmt->bindParam(':nom' , $_POST['nom'] );
$stmt->bindParam(':description' , $_POST['description'] );
$stmt->bindParam(':image' , $name );
$stmt->bindParam(':date_creation' , $_POST['date_creation'] );
$stmt->bindParam(':date_edition' , $_POST['date_edition'] );
$stmt->bindParam(':prix' , $_POST['prix'] );
$stmt->bindParam(':genre' , $_POST['genre'] );
// execute la requete
$stmt->execute();
header('Location: index.php');
?>
