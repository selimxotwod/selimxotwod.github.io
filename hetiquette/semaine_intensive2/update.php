<?php include 'header.php';?>

<body>

  <div class="header"> HÉTIQUETTE </div>

  <div class="menu">
  </div>

<form action="update_action.php?billet=<?=$_GET['billet']?>" method="post">
    <label for="Marque" > Marque </label>
    <input type="text" name="marque" placeholder="Marque" id="Marque">
	</br>

    <label for="Nom" > Nom </label>
    <input type="text" name="nom" placeholder="Nom" id="Nom">
	</br>

    <label for="Description" > Description </label>
    <input type="text" name="description" placeholder="Description" id="Description">
	</br>

   	<label for="Edition" id="MonInputEdition"> Date d'édition </label>
   	<input type="text" name="date_edition" placeholder="Date d'édition" id="Edition">
   	</br>

   	<label for="Prix" > Prix </label>
    <input type="text" name="prix" placeholder="Prix" id="Prix">
	</br>

  <input type="submit" value="Envoyer">
</form>


</html>

<?php include 'footer.php'; ?>
