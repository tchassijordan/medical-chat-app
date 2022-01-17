<?php
include"../../../lib/autoload.php";
$bdd = PDOFactory::getMysqlConnexion();

    if($bdd !=NULL)
    {
        if (isset($_POST['nomUtilisateur']) && $_POST['nomUtilisateur'] != "")
        {
            $manager = new  UtilisateurManager($bdd);
            $data= array(
                "nomUtilisateur"=>$_POST['nomUtilisateur'],
                "prenomUtilisateur"=>$_POST['prenomUtilisateur'],
                "roleUtilisateur"=>$_POST['roleUtilisateur'],
                "loginUtilisateur"=>$_POST['loginUtilisateur'],
                "passwordUtilisateur"=>md5($_POST['passwordUtilisateur']),
                "emailUtilisateur"=>$_POST['emailUtilisateur']
                "adresselUtilisateur"=>$_POST['adresseUtilisateur']
               );

           $utilisateur = new Utilisateur($data); 
           //echo $utilisateur->ge      
          // print_r($article);
           $manager->Add($utilisateur);
			
         $msg = '1';
			
         echo '<script> location.href = "../../../index.php?q=app/view/Utilisateur/Form_Utilisateur&&msg='.$msg.'";</script>';
                //------------------------------------------------------------------------------------------------------
                // Header('Location:'.$_SERVER['HTTP_REFERER']);
            }else{
                $msg =  '0';
                echo '<script> location.href = "../../../index.php?q=app/view/Utilisateur/Form_Utilisateur&&msg='.$msg.'";</script>';
				//include ("../alert_error_connect.php");
            }
        }else{
            $msg = "Impossible de se connecter au serveur. Réessayer plus tard!";	

            //Header('Location:'.$_SERVER['HTTP_REFERER']);
        }
?>