<div class="contentForm">
<?php 
  if(isset($_GET['msg']) && $_GET['msg']=="1"){ 
  echo '<p id="messageSuccess"><font color="white">Utilisateur ajoutée avec success</font></p>';
  <script>
  $(function() {
  $("#messageSuccess").fadeIn('slow').delay(2000).fadeOut('slow');
  });
</script>
  }else if(isset($_GET['msg']) && $_GET['msg']!="1"){ 
    echo '<p id="messageError"><font color="white">echec, veuillez reajouter l\'Utilisateur</font></p>';
  }else echo '';
?>
<span id="loading" style="display:none">En cours...<img src="../web/img/load/loading4.gif"/></span>
<legend>Créer un compte</legend>

  <form action="app/Controller/Utilisateur/C_Utilisateur.php" method="POST" onsubmit="return validForm();">
    <label for="nomUtilisateur">Nom </label>
    <input type="text" id="nomUtilisateur" name="nomUtilisateur" placeholder="nom utilisateur">

    <label for="prenomUtilisateur">Prénom </label>
    <input type="text" id="prenomUtilisateur" name="prenomUtilisateur" placeholder="prenom" >

    <label for="roleUtilisateur">Role </label>
    <textarea id="roleUtilisateur" name="roleUtilisateur" placeholder="role" style="height:100px"></textarea>

    <label for="loginUtilisateur">Login </label>
    <input type="text" id="loginUtilisateur" name="loginUtilisateur" placeholder="login" >

    <label for="passwordUtilisateur">Mot de passe </label>
    <input type="password" id="passwordUtilisateur" name="passwordUtilisateur" placeholder="mot de passe" >

    <label for="emailUtilisateur">Email </label>
    <input type="text" id="emailUtilisateur" name="emailUtilisateur" placeholder="email@gmail.com" >
<label for="telephoneUtilisateur">Telephone </label>
    <input type="text" id="telephoneUtilisateur" name="telephoneUtilisateur" placeholder="telephoneUtilisateur" >



    <input id="Add" type="submit" value="Envoyer">
    <input type="reset" value="reset">
  </form>
</div>