<?php 
            
if(isset($_POST['ajouterReservation'])){
    //echo "hh".$_POST['Email'];
                    include('connexion.php');
                    //echo "1";
        //  $n=$_POST['nomR'];
          $d=$_POST['desR'];
          $c=$_POST['chambreR'];
          $d=$_POST['adR'];
          $en=$_POST['enfR'];
          $dr=$_POST['dateDR'];
          $ar=$_POST['dateAR'];
          
          
         
$req="INSERT INTO reservation (destination,nbrChambre,adulte,enfant,dateDepart,dateArrive)VALUES('$d',$c,$d,$en,$dr,$ar)";
//VALUES('null',0,'$p','$n','francais',0,'$l','$pw','carte',1233,0,1232,'$e',$t)";
          echo $req;
          $res=$cnx->query($req);
          //echo $res;
          if($res){
            
            echo "l`ajout avec succes";
          }
          else{
            echo "l`ajout echoue";
          }
         }
                   ?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Daily UI #001 Sign Up</title>
  <meta name="viewport" content="width=device-width">

  
  
      <link rel="stylesheet" href="styleoffre.css">

  
</head>

<body>
<div class="container">
  <div class="left">
    <div class="header">
      <h2 class="animation a1">Bienvenue </h2>
      <h4 class="animation a2">sur l'espace d'administrateur</h4>
    </div>
    <div class="form">
      <button class="animation a6"><a href="ajouteroffre.php" >AJOUTER OFFRE</a></button>
      <button class="animation a6"><a href="modifieroffre.php" >MODIFIER OFFRE</a></button>
      <button class="animation a6"><a href="supprimeroffre.php" >SUPPRIMER OFFRE</a></button>
      <button class="animation a6"><a href="voirreservation.php" >VOIR LES RESSERVATIONS</a></button>
      <button class="animation a6"><a href="messages.php" >VOIR LES MESSAGES</a></button>
      <button class="animation a6"><a href="../index.php" >DECONNECTION</a></button>
    </div>
  </div>
  <div class="right"></div>
</div>
</body>
</html>
