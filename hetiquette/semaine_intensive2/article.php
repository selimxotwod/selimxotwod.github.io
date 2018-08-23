<?php include 'header.php';?>

<body>

  <div class="header"> HÉTIQUETTE </div>

  <div class="menu">
    <a href="index.php">Accueil</a>
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
        <p><?php echo $donnees['prix']; ?>€</p>
        <?if($donnees['date_edition']== false){?>
          <p><?php echo $donnees['date_creation']; ?></p>
        <?}
        else if($donnees['date_edition']== true){?>
          <p><?php echo $donnees['date_edition']; ?></p>
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

</body>
</html>

<?php include 'footer.php'; ?>
