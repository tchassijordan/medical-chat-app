<?php

include"../../../lib/autoload.php";
$bdd = PDOFactory::getMysqlConnexion();

if($bdd!= NULL)
{
$manager=new Categoriepatient($bdd);
                    
$listeCategorie=$patient->GetListCategorie();

}else echo "Impossible d'acceder à la Base de donnée";
?>