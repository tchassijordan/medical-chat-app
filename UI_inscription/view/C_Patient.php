<?php
include"../../../lib/autoload.php";
$bdd = PDOFactory::getMysqlConnexion();

if($bdd !=NULL)
    {
        if (isset($_POST['nompatient']) && $_POST['nompatient']!="")
        {
            $patient = new  patient($bdd);
            $data= array(
                "nompatient"=>$_POST['nompatient'],
                "prenompatientt"=>$_POST['prenompatient'],
        "numeropatient"=>$_POST['numeropatient'],
        "quartierpatientt"=>$_POST['quartierpatient'],
        "villepatient"=>$_POST['villepatient'],
        "emailpatient"=>$_POST['emailpatient'],
        "loginpatient"=>$_POST['loginpatient'],
        "passwordpatientt"=>$_POST['passwordpatient']
         );

           $patient = new patient($data);       
           //print_r($article);
           $patient->Add($patient);
           $msg = '1'; 

         echo '<script> location.href = "../../../index.php?q=app/view/patient/Form_patient&&msg='.$msg.'";</script>';
                //------------------------------------------------------------------------------------------------------
                // Header('Location:'.$_SERVER['HTTP_REFERER']);
         }else{
           $msg = '0';
           echo '<script> location.href = "../../../index.php?q=app/view/patient/Form_patient&&msg='.$msg.'";</script>';
        //include ("../alert_error_connect.php");
            }
        }else{
            $msg = "Impossible de se connecter au serveur. Réessayer plus tard!"; 
            //Header('Location:'.$_SERVER['HTTP_REFERER']);
        }
?>
