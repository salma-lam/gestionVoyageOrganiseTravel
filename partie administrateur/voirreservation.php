<?php
  include('connexion.php');
  $req= "Select c.nom, c.prenom, c.email, o.ville_destination, o.periode, o.nombre_personne, o.prix_total, o.nom_hotel 
  from reservation r, client c, offre o 
  where o.id_offre=r.id_offre and r.id_client=c.id_client";
  $res=$cnx->query($req);
  ?>
<!DOCTYPE html>
<html>
<head>	
	<meta charset="utf-8">
   <title></title>

   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" type="text/css" href="css/datepicker.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" href="css/templatemo-style.css">     
<style type="text/css">
 th,td {
  font-style: italic;
}
th{
  color: #c66995;
}
#center1{
  color: #69c6ba ;
  border:2px dotted #69c6ba;
}


</style>

</head>
<body>

	<?php
    echo "<br><br><center id='center1' class='tm-recommended-title'><b><b>VOILA LES RESERVATIONS DES CLIENTS</b></b></center><br><br><br>";

     while($data=$res->fetch_assoc()){ 
             echo "<br><br><center id='center2'><b><b>VOILA LA RESERVATION DE Mr/Mme {$data['nom']} {$data['prenom']} </b></b></center><br>";

                  echo"  
                <table align='center' border='2' >                      
                  <tr>
                   <th width='150px'>Nom</th>
                   <th width='150px'>Prenom</th>
                   <th width='150px'>Email</th>
                   <th width='150px'>Ville de destination</th>
                   <th width='150px'>Period</th>
                   <th width='150px'>Nombre de personnes</th>
                   <th width='150px'>Nom Hotel</th>
                   <th width='150px'>Prix</th>
                  </tr>  
                              <tr>
                                <td>{$data['nom']}</td>
                                <td>{$data['prenom']}</td>
                                <td>{$data['email']}</td></div>                             
                                <td>{$data['ville_destination']}</td>
                                <td>{$data['periode']} Jours</td>
                                <td>{$data['nombre_personne']} Personnes</td>
                                <td>{$data['nom_hotel']}</td>
                                <td>{$data['prix_total']} DH</td>                               
                             </tr>
                            
                            
                         </table>";
                         
      }?>
</body>
</html>