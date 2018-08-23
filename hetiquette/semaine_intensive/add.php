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
	<title>Ajout</title>
</head>
<body>
<form action="add_action.php" method="post" enctype="multipart/form-data">
    <label for="Marque" > Marque </label>
    <input type="text" name="marque" placeholder="Marque" id="marque">
	</br>
   	
    <label for="Nom" > Nom </label>
    <input type="text" name="nom" placeholder="Nom" id="nom">
	</br>

    <label for="Description" > Description </label>
    <input type="text" name="description" placeholder="Description" id="description">
	</br>

   	<label for="Image" > Image </label>
   	<input type="file" name="myfile" placeholder="Image" id="image">
   	</br>

	<label for="Creation"> Date de création </label>
    <input type="text" name="date_creation" placeholder="Date de création" id="creation">
	</br> 

   	<label for="Edition" id="MonInputEdition"> Date d'édition </label>
   	<input type="text" name="date_edition" placeholder="Date d'édition" id="edition">
   	</br>

   	<label for="Prix" > Prix </label>
    <input type="text" name="prix" placeholder="Prix" id="prix">
	</br>

    <select name="genre">
		<option value="femme" selected>Femme</option>
		<option value="homme">Homme</option>
	</select>

  <input type="submit" value="Envoyer">
 </form>
</body>
</html>
