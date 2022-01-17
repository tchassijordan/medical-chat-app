
<div class="contentForm">
<?php 
  if(isset($_GET['msg']) && $_GET['msg']=="1"){ 
  echo "<p id='messageSuccess'><font color='white'>patient ajouté avec succes!</font></p>";
  }else if(isset($_GET['msg']) && $_GET['msg']!="1"){ 
    echo "<p id='messageError'><font color='white'>Echec!!!veuillez entrer tous les champs</font></p>";
  }else echo '';
?>
<span id="loading" style="display:none">En cours...<img src="../web/img/load/loading4.gif"/></span>
<legend>Ajout d'un nouveau patient</legend>

  <form action="app/Controller/patient/C_patient.php" method="POST" onsubmit="return validForm();">
    <label for="nomClient">Nom</label>
    <input type="text" id="nompatient" name="nompatient" placeholder="nom patient">

    <label for="prenompatient">Prenom </label>
    <textarea id="prenompatient" name="prenompatient" placeholder="prenom" style="height:100px"></textarea>

    <label for="numeropatient">Numero</label>
    <input type="text" id="numeropatient" name="numeropatient" placeholder="numero">
   
    <label for="quartierpatient">Quartier</label>
    <input type="text" id="quartierpatient" name="quartierpatient" placeholder="quartier">
    
    <label for="villepatient">Ville</label>
    <input type="text" id="villepatient" name="villepatient" placeholder="ville">

    <label for="emailpatient">Email</label>
    <input type="text" id="emailpatient" name="emailpatient">
   
    <label for="loginpatient">login</label>
    <input type="text" id="loginpatient" name="loginpatient" placeholder="login patient..."></br>

    <label for="passwordpatient">Password</label>
    <input type="password" id="passwordpatient" name="passwordpatient" placeholder="password patient ..."></br>
    <br>
    
      
    </select>

    <input id="Add" type="submit" value="Envoyer">
    <input type="reset" value="reset">
  </form>
</div>