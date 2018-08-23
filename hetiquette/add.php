<?php include 'header.php';?>

<body>

  <div class="header"> 
      
      <div class="logo"><a href="index.php"><img src="img/logo.png"></a></div>

     </div>

<div class="add_form">

          <form action="add_action.php" method="post" enctype="multipart/form-data">
              <div class="marge">

          <h1>
           Ajout d'un article :
            
          </h1>
        
          <fieldset>

          <div class="formDescri">
             <label for="Description" > Marque :<span class="obligatoire"></span></label>
             <br>
              <input type="text" required="required" name="marque" placeholder="Marque" id="marque">
          </div>

          <div class="formDescri">
              <label for="Nom" > Nom :<span class="obligatoire"></span></label>
              </br>
              <input type="text" required="required" name="nom" placeholder="Nom" id="nom">
          </div>

            <div class="formDescri">
              <label for="Description" > Description :<span class="obligatoire"></span></label>
              </br>
              <textarea type="text"  required="required" name="description" id="description"></textarea>
          </div>

          <div class="formDescri">
            <label for="Genre" > Genre :<span class="obligatoire"></span></label>
            </br>
            <select name="genre">
              <option value="femme" selected>Femme</option>
              <option value="homme">Homme</option>
            </select>
          </div>


            <div class="formDescri">
              <label for="Prix" > Prix :<span class="obligatoire"></span></label>
              </br>
              <input type="text"  required="required" name="prix" placeholder="Prix"  id="prix">
          </div>

            <div class="formDescri" class="file">
              <label for="Image" > Image :<span class="obligatoire"></span></label>
              </br>
              <input type="file" required="required" name="myfile" id="image">
          </div>

          </fieldset>

          <div class="bouton">
            <input  type="submit" value="Envoyer" class="btn">
            
          </div>
          </div>
            </form>



</div>
<div class="footer">
</div>

</html>
