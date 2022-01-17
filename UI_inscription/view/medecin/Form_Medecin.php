
<div class="contentForm">
<?php 
  if(isset($_GET['msg']) && $_GET['msg']=="1"){	
 	echo "<p id='messageSuccess'><font color='white'>Medecin ajouté avec succès!</font></p>";
  }else if(isset($_GET['msg']) && $_GET['msg']!="1"){	
    echo "<p id='messageError'><font color='white'>Echec!!! Veuillez remplir tous les champs</font></p>";
  }else echo '';
?>
<span id="loading" style="display:none">En cours...<img src="../web/img/load/loading4.gif"/></span>
<legend>Ajout d'un nouveau medecin </legend>

  <form action="app/Controller/Medecin/C_Medecin.php" method="POST" onsubmit="return validForm();">
    <label for="nomFournisseur">Nom</label>
    <input type="text" id="nomFournisseur" name="nomFournisseur" placeholder="Nom Fournisseur">

    <label for="villeMedecin">Ville</label>
    <select id="villeMedecin" name="villeMedecin">
      <option>Yaoundé</option>
      <option>Douala</option>
      <option>Bafoussam</option>
      <option>Bandjoun</option>
      <option>Bangangté</option>
      <option>Bamenda</option>
      <option>buea</option>
      </select>


    <label for="emailMedecin">Email</label>
    <input type="text" id="emailMedecin" name="emailMedecin" placeholder="email">
    <label for="centreMedecin">centre</label>
    <input type="text" id="centreMedecin" name="centreMedecin" placeholder="centre">
   
      <?php 
        /* $idconn = PDOFactory::getMysqlConnexion();
         if($idconn!=NULL)
           {	
            $manager= new CategorieManager($idconn);	
            $listeCategorie = $manager->GetListCategorie($idconn);

            foreach($listeCategorie AS $row)
            {
             echo "<option value='".$row['idCategorie']."'>".$row['nomCategorie']."-->".$row['description']."</option>";
            }
          }*/
      ?>
    </select>

    <input id="Add" type="submit" value="Envoyer">
    <input type="reset" value="reset">
  </form>
</div>