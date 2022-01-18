<?php
include"../../../lib/autoload.php";
$bdd = PDOFactory::getMysqlConnexion();

if($bdd !=NULL)
    {
        if (isset($_POST['nomCategorie']) && $_POST['nomCategorie']!="")
        {
            $manager = new  CategorieManager($bdd);
            $data= array(
                "nomCategorie"=>$_POST['nomCategorie'],
                "description"=>$_POST['description']
                
               );

           $categorie = new Categorie($data);       
           //print_r($categorie);
           $manager->Add($categorie);
           $msg = '1'; 

         echo '<script> location.href = "../../../index.php?q=app/view/Categorie/Form_Categorie&&msg='.$msg.'";</script>';
                //------------------------------------------------------------------------------------------------------
                // Header('Location:'.$_SERVER['HTTP_REFERER']);
         }else{
           $msg = '0';
           echo '<script> location.href = "../../../index.php?q=app/view/Categorie/Form_Categorie&&msg='.$msg.'";</script>';
				//include ("../alert_error_connect.php");
            }
        }else{
            $msg = "Impossible de se connecter au serveur. Réessayer plus tard!";	

            //Header('Location:'.$_SERVER['HTTP_REFERER']);
        }
?>
