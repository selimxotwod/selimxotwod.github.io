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
<body>
	<div class="nav">
		<a style="float:right" href="men.php">Homme</a>
		<a style="float:right; margin-right:20px;"  href="women.php">Femme</a>
	</div>

	<form action="search_women.php" method="get">
		<input type="text" name="q" placeholder="Recherche" id="q">
	</form>
	<a href="add.php">Ajouter un article</a>

	<?php

	$sql= "SELECT COUNT(id) as nbArt FROM s_intensive";
	$stmt = $conn->prepare($sql);
	$stmt->execute();
	$donnes = $stmt->fetch();

	$nbArt= $donnes['nbArt'];
	$perPage = 2;
	$nbPage = ceil($nbArt/$perPage);

	if(isset($_GET['p']) && $_GET['p']>0 && $_GET['p']<=$nbPage){
		$cPage= $_GET['p'];
	}
	else{
		$cPage=1;
	}

	$q = $_GET['q'];
 	$ma_requete = "SELECT * FROM `s_intensive` WHERE `genre`= 'femme'LIMIT ".(($cPage-1)*$perPage).",$perPage;";


 	$stmt = $conn->prepare($ma_requete);
	$stmt->execute();
	while( $row = $stmt->fetch() ){
	?>

	<a href="article.php?billet=<?=$row['id']?>">
		<div class="article">
			<img src="img/<?=$row['image']?>">
			<h2><?=$row['marque']?></h2>
			<p><?=$row['nom']?></p>
			<p>€<?=$row['prix']?></p>
		</div>
	</a>
	<? 
	if ($ma_requete == NULL) {
		echo "none";
	}
	?>

<?php 
}
?>
<?
for ($i=1; $i <=$nbPage ; $i++) { 
		if ($i ==$cPage) {
			echo "$i ";
		}
		else{
	echo "<a href=\"search_women.php?q=$q&p=$i\">$i </a>";
}
}
?>