<div class="contentForm">
<?php 
  if(isset($_GET['msg']) && $_GET['msg']=="1"){ 
  echo '<p id="messageSuccess"><font color="black">patient ajoutée avec success</font></p>';
  }else if(isset($_GET['msg']) && $_GET['msg']!="1"){ 
    echo '<p id="messageError"><font color="black">echec, veuillez remplir tous les champs !!!!</font></p>';
  }else echo '';
?>
<span id="loading" style="display:none">En cours...<img src="../web/img/load/loading4.gif"/></span>
<legend>Créer un Compte</legend>

  <form action="app/Controller/patient/C_patient.php" method="POST" onsubmit="return validForm();">

    <label for="numeropatient">Numero</label>
    <input type="text" id="numeropatient" name="numeroClient" placeholder="Numero patient">

    <label for="nompatient">Nom </label>
    <input type="text" id="nompatient" name="nompatient" placeholder="nom patient">

    <label for="prenompatient">Prénom </label>
    <input type="text" id="prenompatient" name="prenomClient" placeholder="prenom" >

    <label for="quartierpatient">Quartier </label>
    <input type="text" id="quartierpatient" name="quartierpatient" placeholder="quartier">

    <label for="villepatient">Ville </label>
    <input type="text" id="villepatient" name="villepatient" placeholder="ville">

    <label for="loginpatient">Login </label>
    <input type="text" id="loginpatient" name="loginpatient" placeholder="login" >

    <label for="passwordpatient">Mot de passe </label>
    <input type="password" id="passwordpatientt" name="passwordpatient" placeholder="mot de passe" > <br>

    <label for="emailpatient">Email </label>
    <input type="text" id="emailpatient" name="emailpatient" placeholder="email@gmail.com" >



    <input id="Add" type="submit" value="Envoyer">
    <input type="reset" value="reset">
  </form>
</div>