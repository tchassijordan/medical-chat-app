<?php
 include "../../../lib/autoload.php";

$idcon = PDOFactory::getMysqlConnexion();

if($idcon!=null){

$managerclient=new ClientManager($idcon);
	
$clientExist=$managerPatient->PatientExist($_POST['email'], $_POST['pass']);

if($clientExist>0) {// Si les paramètres correspondent
echo "1";
$tabClient=$managerPatient->GetUniquePatient($_POST['email'], $_POST['pass']);
//ouverture de session
session_start();
$_SESSION['emailpatient']=$_POST['email'];
$_SESSION['passwordpatient']=$_POST['pass'];
$_SESSION['idpatient']=$tabpatient[0]['idPatient'];
$_SESSION['nompatient']=$tabpatient[0]['nomPatient'];
$_SESSION['prenompatient']=$tabpatient[0]['prenomPatient'];
 $_SESSION['telephonepatient']=$tabpatient[0]['telephonePatient']; 
}else echo "0";
}else echo "-1";
?>