<?php
session_start(); 
 ?>

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
    <link rel="stylesheet" href="css/templatemo-style.css">                                   <!-- Templatemo style -->
 </head>
 <body>
       
 
  <?php
  // echo $_POST['destination'];
                  echo "<div class='tab-content clearfix'>";
                       include('connexion.php');
                          $req="select * from offre where ville_destination='".$_POST['destination']."'";
                          $res=$cnx->query($req);
                          while ($data=$res->fetch_assoc()){
                           if ($data) {  
                           echo "                 
                            <table align='center' hspace='10' vspace='6'>                      
                            <div class='tab-pane fade' id='4a'>         
                             <div class='tm-recommended-place-wrap'>   
                              <div class='tm-recommended-place'>
                                <tr>
                                 <td><img src='img/{$data['photo']}' alt='Imag' class='img-fluid tm-recommended-img' width=300px></td>
                                 <td style='width:100px'></td>
                                 <td><div class='tm-recommended-description-bo'>
                                    <h3 class='tm-recommended-title'>{$data['zone']}</h3>
                                    <p class='tm-text-highlight'>{$data['ville_destination']}</p>
                                    <p class='tm-text-gray'>{$data['periode']} Jours  //  {$data['nombre_personne']} Personnes   //  Hotel {$data['nom_hotel']}</p> 
                                    
                                 </div></td>
                                 <td style='width:100px'></td>
                                 <td> <a class='tm-recommended-price-box'>
                                   <p class='tm-recommended-price'>{$data['prix_total']}DH</p></td>       
                                   </a>
                                  <td> <a href='connecter/connecter.php?id_offre={$data['id_offre']}'> <input type='submit' name='reserver' value='Reservé' class='text-uppercase btn-primary tm-btn'></a> </td>
                                </tr>
                                 <br><br><br>
                             </div>    
                           </div> 
                          </table>
                          </div>";   // j'ai supprimer href='#'' du balise <a>
                         
                          }

                          /*  else{
                             echo "L'offre n'est pas disponible pour le moment";
                            }*/
                       }   
                      
              ?>            
 </body>
 </html>