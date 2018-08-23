<?php include 'header.php';?>

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


   
    <?php
    $req = $conn->prepare('SELECT `marque`,`nom`,`description`,`image`,`prix`,
    	`date_creation`,`date_edition` FROM `s_intensive` WHERE id=?');
    $req->execute(array($_GET['billet']));
    $donnees = $req->fetch();
    ?>
    <div class="detailsArt">
      <div class="first">
      	<h1><?php echo $donnees['marque']; ?></h1>
      	<h2><?php echo $donnees['nom']; ?></h2>
      	<p><?php echo $donnees['description']; ?></p>
      </div>

      <div class="second">
      	<img src="img/<?php echo $donnees['image']; ?>">
      </div>

      <div class="third">
        <h3><?php echo $donnees['prix']; ?>€</h3>
        <?if($donnees['date_edition']== NULL){?>
          <p class="date">Date de création : <?php echo $donnees['date_creation']; ?></p>
        <?}
        else if($donnees['date_edition']== true){?>
          <p class="date">Date d'édition : <?php echo $donnees['date_edition']; ?></p>
        <?}
        ?>
      </div>
    </div>

  <div class="edition">
    	<a href="update.php?billet=<?=$_GET['billet']?>">Modifier l'article</a>
    	<a href="delete.php?billet=<?=$_GET['billet']?>">Supprimer l'article</a>
  </div>

    <?php
    $req->closeCursor();
    ?>

    <div class="footer">
    </div>

</body>
</html>