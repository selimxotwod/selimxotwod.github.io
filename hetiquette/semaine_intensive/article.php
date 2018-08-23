	<?php include 'header.php';?>
<?php
$req = $conn->prepare('SELECT `marque`,`nom`,`description`,`image`,`prix`,
	`date_creation`,`date_edition` FROM `s_intensive` WHERE id=?');
$req->execute(array($_GET['billet']));
$donnees = $req->fetch();
?>

<div class="first">
	<h1><?php echo $donnees['marque']; ?></h1>
	<h2><?php echo $donnees['nom']; ?></h2>
	<p><?php echo $donnees['description']; ?></p>
</div>

<div class="second">
	<img src="img/<?php echo $donnees['image']; ?>">
</div>

<div class="third">
	<p>€<?php echo $donnees['prix']; ?></p>
	<?if($donnees['date_edition']== false){?>
		<p><?php echo $donnees['date_creation']; ?></p>
	<?}
	else if($donnees['date_edition']== true){?>
		<p><?php echo $donnees['date_edition']; ?></p>

	<?}
	?>

</div>

	<a href="update.php?billet=<?=$_GET['billet']?>">Modifier l'article</a>
	<a href="delete.php?billet=<?=$_GET['billet']?>">Supprimer l'article</a>

<?php
$req->closeCursor();
?>