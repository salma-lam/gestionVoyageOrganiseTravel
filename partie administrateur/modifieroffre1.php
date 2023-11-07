<?php 
$ch=false;
include('connexion.php');
$id_offre=$_GET['id_offre'];
$req1="select * from offre where id_offre= ".$id_offre;
$res1=$cnx->query($req1);
$data1=$res1->fetch_assoc();
            
if(isset($_POST['modifier'])){
                    
          $photo=$_FILES['photo']['name'];
          $chemin='../img/'.$photo;
      move_uploaded_file($_FILES['photo']['tmp_name'], $chemin);

$req="UPDATE offre SET photo='$photo',ville_destination='{$_POST['ville_destination']}',zone='{$_POST['zone']}',periode={$_POST['periode']},nombre_personne={$_POST['nombre_personne']},prix_total={$_POST['prix_total']},nom_hotel='{$_POST['nom_hotel']}' where id_offre={$_POST['id_offre']} ";

        // echo $req;
          $res=$cnx->query($req);
         // echo $res;
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
      <h4 class="animation a2">Modifier un offre</h4>
      <h4 class="animation a2">
      <b><?php
        if($ch){
          echo "la modification est faite avec succès";
        }
      ?>
      </b> 
    </h4>
    </div>
    <div class="form">
      <input type="hidden" class="form-field animation a3" placeholder="id_offre" name="id_offre" value="<?=$data1['id_offre']?>" >
      <input type="text" class="form-field animation a3" placeholder="ville de destination" name="ville_destination" value="<?=$data1['ville_destination']?>">
     <!-- <input type="text" class="form-field animation a4" placeholder="zone" name="zone" value="<?//=$data1['zone']?>">-->
      <select name="zone" class="form-field animation a3"  >
       <option value="<?=$data1['zone']?>" ><?=$data1['zone']?></option>
       <option>ouest</option>
       <option>nord</option>
       <option>sud</option>
       <option>est</option>

      </select>
      <input type="text" class="form-field animation a3" placeholder="periode par jours" name="periode" value="<?=$data1['periode']?>">
      <input type="text" class="form-field animation a4" placeholder="nombres des personnes" name="nombre_personne" value="<?=$data1['nombre_personne']?>">
      <input type="text" class="form-field animation a4" placeholder="prix total" name="prix_total" value="<?=$data1['prix_total']?>">
      <input type="text" class="form-field animation a3" placeholder="nom d`hotel" name="nom_hotel" value="<?=$data1['nom_hotel']?>">
      <input type="file" class="form-field animation a3" name="photo" value="<?=$data1['photo']?>">
      

      <!--<p class="animation a5"><a href="#">Forgot Password</a></p>-->
      <button class="animation a6" type="submit" name="modifier">Modifier</button>

    </div>
  </div>
  <div class="right"></div>
</div>
</form>

</body>
</html>

