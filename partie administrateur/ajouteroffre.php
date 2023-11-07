<?php 
            $ch=false;
if(isset($_POST['ajouter'])){
                    include('connexion.php');
                    
          $ville_destination=$_POST['ville_destination'];
          $zone=$_POST['zone'];
          $periode=$_POST['periode'];
          $prix_total=$_POST['prix_total'];
          $nom_hotel=$_POST['nom_hotel'];
          $photo=$_FILES['photo']['name'];
          $nombre_personne=$_POST['nombre_personne'];
          
          
          $chemin='../img/'.$photo;
      move_uploaded_file($_FILES['photo']['tmp_name'], $chemin);
          
         
$req="INSERT INTO offre (photo,ville_destination,zone,periode,nombre_personne,prix_total,nom_hotel)VALUES('$photo','$ville_destination','$zone',$periode,$nombre_personne,$prix_total,'$nom_hotel');";

         // echo $req;INSERT INTO offre (photo,ville_destination,zone,periode,nombre_personne ,prix_total,nom_hotel)VALUES('$photo','$ville_destination','$zone',$periode,$nombre_personne  ,$prix_total,'$nom_hotel')
          $res=$cnx->query($req);
          //echo $res;
          if($res){
            
           $ch=true;
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
  <form method="POST" action="" enctype="multipart/form-data">
<div class="container">
  <div class="left">
    <div class="header">
    
      <h2 class="animation a1">Bienvenue</h2>
      <h4 class="animation a2">Ajouter un offre</h4>
       <h4 class="animation a2">
        <b><?php
        if($ch){
          echo "l'ajout est faite avec succès";
        }
      ?>
      </b> 
    </h4>

    </div>
    <div class="form">
      <input type="text" class="form-field animation a3" placeholder="ville de destination" name="ville_destination" required>
     <!-- <input type="text" class="form-field animation a4" placeholder="zone" name="zone" required>-->
     <select name="zone" class="form-field animation a4">
       <option>
         nord
       </option>
       <option>
         sud
       </option>
       <option>
         est
       </option>
       <option>
         ouest
       </option>
     </select>
      <input type="text" class="form-field animation a5" placeholder="periode par jours" name="periode" required>
      <input type="text" class="form-field animation a4" placeholder="nombres des personnes" name="nombre_personne" required>
      <input type="text" class="form-field animation a4" placeholder="prix total" name="prix_total" required>
      <input type="text" class="form-field animation a3" placeholder="nom d`hotel" name="nom_hotel" required>
      <input type="file" class="form-field animation a3" name="photo">
      

      <!--<p class="animation a5"><a href="#">Forgot Password</a></p>-->
      <button class="animation a6" type="submit" name="ajouter">ajouter</button>
     
    </div>
  </div>
  <div class="right"></div>
</div>
</form>
</body>
</html>
