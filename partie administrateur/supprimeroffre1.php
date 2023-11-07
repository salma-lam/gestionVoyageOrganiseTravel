<?php

   include('connexion.php');

$req="DELETE FROM offre WHERE id_offre=".$_GET['id_offre'];
$res=$cnx->query($req);


            header('location:supprimeroffre.php');
      if($res){
        echo "okk";
      }
      else{echo "noo";}
         

?>
