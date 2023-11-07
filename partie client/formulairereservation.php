 <?php      
   session_start();
    include('connexion.php');
    $ch=false; 
    $id_offre=$_GET['id_offre'];
    $id_client=$_SESSION['id_client'];
     $req2="select * from offre where id_offre=".$id_offre;
     $res2=$cnx->query($req2);
     $data2=$res2->fetch_assoc();


     $req1="Select * from client where id_client=".$id_client;
     $res1=$cnx->query($req1);
     $data1=$res1->fetch_assoc();


      if(isset($_GET['reserve'])){               
         $o=$_GET['id_offre'];
         $c=$_SESSION['id_client'];       
         $req="INSERT INTO reservation (id_offre,id_client) VALUES ($o,$c)";
         $cnx->query($req);
        header("Location:pdfreservation.php?id_offre=".$_GET['id_offre']);    
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
  <?php   $ch=false; ?>
<div class="container">
  <div class="left">
    <div class="header">
      <h2 class="animation a1">Bienvenue  </h2>
      <h4 class="animation a2"><?php if($ch) echo"Vous n'etes pas inscrit";?></h4>
    </div>
    <div class="form">
    <table>     
     <form action="" method="GET">
    <tr>
      <td><label>Nom :</label></td>
     </tr>
    <tr>
      <td><input type="text" class="form-field animation a3" placeholder="Nom" name="nom" required value="<?=$data1['nom']?>"></td>
     </tr>
     <tr>
      <td><label>Prenom :</label></td>
      </tr>
     <tr>
      <td><input type="text" class="form-field animation a4" placeholder="Prenom" name="prenom" required value="<?=$data1['prenom']?>"></td>
      </tr>
      <tr>
      <td><label>Email :</label></td>
     </tr>
     <tr>
      <td><input type="email" class="form-field animation a3" placeholder="Adresse email" name="email" required value="<?=$data1['email']?>"></td>
     </tr>
     <tr>
      <td><label>Ville de destination :</label></td>
     </tr>
     <tr>
      <td><input type="text" class="form-field animation a4" placeholder="Ville destination" name="villeDestination" value="<?=$data2['ville_destination']?>"></td>
      </tr>
      <tr>
      <td><label>Periode :</label></td>
       </tr>
      <tr>
      <td><input type="text" class="form-field animation a3" placeholder="Periode" name="periode" value="<?=$data2['periode']?> Jours"></td>
      </tr>
      <tr>
      <td><label>Nombre de personne :</label></td>
       </tr>
      <tr>
      <td><input type="text" class="form-field animation a4" placeholder="Nombre personne" name="nombrePersonne" value="<?=$data2['nombre_personne']?> Personnes"></td>
      </tr>
      <tr>
      <td><label>Prix total :</label></td>
       </tr>
      <tr>
      <td><input type="text" class="form-field animation a3" placeholder="Prix total" name="prixTotal" value="<?=$data2['prix_total']?> DH"></td>
      </tr>
      <tr>
      <td><label>Nom hotel :</label></td>
        </tr>
      <tr>
      <td><input type="text" class="form-field animation a3" placeholder="Nom hotel" name="nomHotel" value="Hotel <?=$data2['nom_hotel']?>"></td>
      </tr>
      <input type="hidden" class="form-field animation a3"  name="id_offre" value="<?=$data2['id_offre']?>">
    </table>
     
      <!--<p class="animation a5"><a href="#">Forgot Password</a></p>-->
      
      <!-- <input class="animation a6" class='animation a6' type='submit' name='reserve' value='Reservé'>-->
    <button class="animation a6" type="submit" name="reserve">Reservé</button>
    </div>
  </div>
  <div class="right"></div>
</div>
        </form>

</body>
</html>
