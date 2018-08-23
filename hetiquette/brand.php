<?php include 'header.php';?>

<body>

    <div class="header"> 
      <div class="add">
       <a href="men.php">HOMMES</a>
      <a href="women.php">FEMMES</a>
      <?
        $sql= "SELECT id as alea FROM s_intensive ORDER BY rand()
   LIMIT 1" ;
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $donnes = $stmt->fetch();

    $alea= $donnes['alea'];

      ?>
      <a href="surprise.php?billet=<?=$alea?>">SURPRISE</a>
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
      $sql= "SELECT DISTINCT `marque` FROM `s_intensive` ORDER BY marque ASC;";
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
    $brand= $_GET['brand'];
  	$sql= "SELECT COUNT(id) as nbArt FROM s_intensive WHERE `marque`= '$brand'";
  	$stmt = $conn->prepare($sql);
  	$stmt->execute();
  	$donnes = $stmt->fetch();

  	$nbArt= $donnes['nbArt'];
  	$perPage = 6;
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
      `s_intensive` WHERE `marque`= '$brand'
      LIMIT ".(($cPage-1)*$perPage).",$perPage;";
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