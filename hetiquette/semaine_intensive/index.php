<?php include 'header.php';?>
  	
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
	


	$sql = "SELECT
	`id`,
	`image`,
	`marque`,
  	`nom`,
  	`prix`
FROM
  `s_intensive`
  LIMIT ".(($cPage-1)*$perPage).",$perPage;;";
$stmt = $conn->prepare($sql);
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

<?php 
}

for ($i=1; $i <=$nbPage ; $i++) { 
		if ($i ==$cPage) {
			echo "$i ";
		}
		else{
	echo "<a href=\"search.php?q=$q&p=$i\">$i </a>";
}
}
?>




</body>
</html>