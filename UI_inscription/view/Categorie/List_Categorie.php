<?php

//include"../../../lib/autoload.php";
$bdd = PDOFactory::getMysqlConnexion();

$patient=new Categoriepatient($bdd);
                    
$listeCategorie=$patient->GetListCategorie();
?>

<div id="ListePays" style="width:auto;height:auto; border:solid 1px; margin-top:2%;border:solid 0px; position:none; overflow:scroll"><center>

<fieldset>
    <table width="70%">
        <thead>
            <tr>
                <td colspan="5"><b><font color="green">Listing des categories</font></b></td>
            </tr>
            <tr bgcolor="##99FFFF">
                <td><font color="white">Nom</font></td>
                <td><font color="white">Description</font></td>
                <td ><font color="white">Modifier</font></td>
                <td ><font color="white">ajouter</font></td>
            </tr>
        </thead>
        <tbody>
        <?php
        //include("../../../controller/Commande/C_List_Commande.php");
                    
                    foreach($listeCategorie as $row)
                    { ?>
                    <tr bgcolor="#EEFFFF">
                            <td><?php echo $row['nomCategorie'] ?></td>
                            <td><?php echo $row['description'] ?></td>
                    </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        </div>