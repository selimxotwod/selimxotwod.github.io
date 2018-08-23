<?php include 'header.php';?>

<div class="header"> HÉTIQUETTE </div>

<div class="menu">
  <a href="index.php">Accueil</a>
</div>

<div class="nav">
  <a href="men.php">HOMMES</a>
  <a href="women.php">FEMMES</a>
</div>

	<form action="search_women.php" method="get">
		<input type="text" name="q" placeholder="Recherche" id="q">
	</form>
	<a href="add.php">Ajouter un article</a>

  <div class="page">

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

</div>


<?php include 'footer.php'; ?>
