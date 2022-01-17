
<div class="contentForm">
<?php 
  if(isset($_GET['msg']) && $_GET['msg']=="1"){	
 	echo "<p id='messageSuccess'><font color='black'>Catégorie ajouté avec succès!</font></p>";
  }else if(isset($_GET['msg']) && $_GET['msg']!="1"){	
    echo "<p id='messageError'><font color='black'>Echec!!! Veuillez remplir tous les champs</font></p>";
  }else echo '';
?>
<span id="loading" style="display:none">En cours...<img src="../web/img/load/loading4.gif"/></span>
<legend>Ajout d'une nouvelle catégorie</legend>

  <form action="app/Controller/Categorie/C_Categorie.php" method="POST" onsubmit="return validForm();">
    <label for="nomCategorie">Nom</label>
    <input type="text" id="nomCategorie" name="nomCategorie" placeholder="Nom Categorie">

    <label for="description">Description </label>
    <textarea id="description" name="description" placeholder="description" style="height:100px"></textarea>


    <input id="Add" type="submit" value="Envoyer">
    <input type="reset" value="reset">
  </form>
</div>