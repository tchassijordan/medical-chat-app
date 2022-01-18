<?php

//include"../../../lib/autoload.php";
$bdd = PDOFactory::getMysqlConnexion();

$manager=new FournisseurManager($bdd);
                    
$listeFournisseur=$manager->GetListFournisseur();
?>

<div id="ListePays" style="width:auto;height:auto; border:solid 1px; margin-top:2%;border:solid 0px; position:none; overflow:scroll"><center>

<fieldset>
    <table width="70%">
        <thead>
            <tr>
                <td colspan="5"><b><font color="green">Listing des fournisseurs</font></b></td>
            </tr>
            <tr bgcolor="##99FFFF">
                <td><font color="black">Nom</font></td>
                <td><font color="black">Ville</font></td>
                <td><font color="black">Email </font></td>
                <td ><font color="black">Modifier</font></td>
                <td ><font color="black"></font></td>
            </tr>
        </thead>
        <tbody>
        <?php
        //include("../../../controller/Commande/C_List_Commande.php");
                    
                    foreach($listeFournisseur as $row)
                    { ?>
                    <tr bgcolor="#EEFFFF">
                            <td><?php echo $row['nomFournisseur'] ?></td>
                            <td><?php echo $row['villeFournisseur'] ?></td>
                            <td><?php echo $row['emailFournisseur'] ?></td>
                    </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        </div>