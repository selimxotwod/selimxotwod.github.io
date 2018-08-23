<?php include 'header.php';?>

<body>

    <div class="header"> 
      <div class="add">
       <a href="men.php">HOMMES</a>
      <a href="women.php">FEMMES</a>
      <?
        $sql= "SELECT id as alea FROM s_intensive ORDER BY rand() 
   LIMIT 1" ;// selectionne un id aléatoirement
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $donnes = $stmt->fetch();

    $alea= $donnes['alea'];

      ?>
      <a href="article.php?billet=<?=$alea?>">SURPRISE</a> <!--ajoute dans l'url le numéro de l'id aléatoire séléctionné -->
      </div>
      <div class="logo"><a href="index.php"><img src="img/logo.png"></a></div>

      <div class="form">
        <a href="add.php"><img src="img/plus.png" class="plus"></a>
      <form action="search.php" method="get" class="recherche">
    
        <input type="text" name="search" placeholder="Recherche" id="search">
    </form>
     </div>
    </div>

    <div class="content">
    <div class="nav">
      <?php
      $sql= "SELECT DISTINCT `marque` FROM `s_intensive`ORDER BY marque ASC;";// selectionne toute les marques, "DISTINCT" permet de ne pas avoir de doublons,"ORDER BY marque ASC" permet de trier par ordre croissant
      $stmt = $conn->prepare($sql);
    $stmt->execute();
    while( $row = $stmt->fetch() ){
      ?>
      <a href="brand.php?brand=<?=$row['marque']?>"><h2><?php echo $row['marque']; ?></h2></a>
      <?
      }
      ?>
     
    </div>

  <div class="page">
    <div class="row">

    <?php
  	$sql= "SELECT COUNT(id) as nbArt FROM s_intensive";// sélectionne le nombre d'id dans la base de donnée autrement dis le nombre d'article et met ce bombre dans "nbArt"
  	$stmt = $conn->prepare($sql);
  	$stmt->execute();
  	$donnes = $stmt->fetch();

  	$nbArt= $donnes['nbArt'];
  	$perPage = 6;
  	$nbPage = ceil($nbArt/$perPage);// ceil arrondi a l'entier supérieur

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
              <div class="imageArt">
                <img src="img/<?=$row['image']?>">
              </div>
              <div class="introArt">
                <h2><?=$row['marque']?></h2>
                <p><?=$row['nom']?></p>
                <p>€<?=$row['prix']?></p>
              </div>
            </div>

      </a>
      

        
      <?php
      }
      ?>
      </div>
      </div>
      </div>
      <div class="p">
        <div class="pnum">
      <?php

      for ($i=1; $i <=$nbPage ; $i++) {
      		if ($i ==$cPage) {
      			echo "<p style=color:black;>$i</p> ";
      		}
      		else{
      	echo "<a href=\"index.php?p=$i\">$i </a>";
      }
      }
      ?>
        </div>
      </div> 
  

  <div class="footer">
  </div>

</body>
</html>
