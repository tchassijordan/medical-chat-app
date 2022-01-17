<?php
 include "../lib/autoload.php";

$idcon = PDOFactory::getMysqlConnexion();

if($idcon!=null){

$patient=new patient($idcon);
	
$clientExist=$patient->PatientExist($_POST['email'], $_POST['pass']);

if($patientExist>0) {// Si les infos correspondent au patient
 echo "1";
session_start();
$_SESSION['email']=$_POST['email'];
$_SESSION['pass']=$_POST['pass'];

}else echo "0";
}else echo "Erreur de connexion à la Base de Donnée";
?>