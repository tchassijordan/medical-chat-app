<?php
include"../../../lib/autoload.php";
$bdd = PDOFactory::getMysqlConnexion();

    if($bdd !=NULL)
    {
        if (isset($_POST['nompatient']) && $_POST['nompatient'] != "")
        {
            $manager = new  ClientManager($bdd);
            $data= array(
                "numeropatient"=>$_POST['numeropatient'],
                "nompatient"=>$_POST['nompatient'],
                "prenompatient"=>$_POST['prenompatient'],
                "quartierpatient"=>$_POST['quartierpatient'],
                "villepatient"=>$_POST['villepatient'],
                "loginClient"=>$_POST['loginpatient'],
                "passwordpatient"=>$_POST['passwordpatient'],
                "emailpatient"=>$_POST['emailpatient'],
                "rolepatient"=>"patient",
               );
 $client = new patient($data);       
          // print_r($article);
           $manager->Add($patient);
			
         $msg = '1';
			
         echo '<script> location.href = "../../../index.php?q=app/view/patient/Form_patient&&msg='.$msg.'";</script>';
                //------------------------------------------------------------------------------------------------------
                // Header('Location:'.$_SERVER['HTTP_REFERER']);
            }else{
                $msg =  '0';
                echo '<script> location.href = "../../../index.php?q=app/view/patient/Form_patient&&msg='.$msg.'";</script>';
				//include ("../alert_error_connect.php");
            }
        }else{
            $msg = "que voulez vous?";	

            //Header('Location:'.$_SERVER['HTTP_REFERER']);
        }
?>