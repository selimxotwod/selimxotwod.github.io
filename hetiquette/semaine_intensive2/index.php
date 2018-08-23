<?php include 'header.php';?>

<body>

    <div class="header"> HÉTIQUETTE </div>

    <div id="carrousel">
          <ul>
            <li><img class="picture" src="./img/mainpage.jpg"   /></li>
            <li><img class="picture" src="./img/67E8CEF0F5.jpg" /></li>
            <li><img class="picture" src="./img/71AE5755ZP.jpg" /></li>
            <li><img class="picture" src="./img/53ZL5GR6DC.jpg" /></li>
            <li><img class="picture" src="./img/JFJEI7G70B.jpg" /></li>
            <li><img class="picture" src="./img/61E4EE54FD.jpg" /></li>
          </ul>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.js"></script>
    <script src="jquery_index.js"></script>

    <div class="menu">
    <form action="search.php" method="get">
      <div class="recherche">
        <label for="search">Recherche</label>
        <input type="text" name="search" placeholder="Recherche" id="search">
      </div>
    </form>
      <a class="ajout" href="add.php"> Ajouter un article </a>
    </div>

    <div class="nav">
      <a href="men.php">HOMMES</a>
      <a href="women.php">FEMMES</a>
    </div>

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

      for ($i=1; $i <=$nbPage ; $i++) {
      		if ($i ==$cPage) {
      			echo "$i ";
      		}
      		else{
      	echo "<a href=\"search.php?q=$q&p=$i\">$i </a>";
      }
      }
      ?>

  </div>

</body>
</html>

<?php include 'footer.php'; ?>
