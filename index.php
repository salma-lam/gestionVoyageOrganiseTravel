<?php
session_start(); 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Travel</title>
<!-- 
Journey Template 
http://www.templatemo.com/tm-511-journey
-->
    <!-- load stylesheets -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">  <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">                <!-- Font Awesome -->
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      <!-- Bootstrap style -->
    <link rel="stylesheet" type="text/css" href="css/datepicker.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" href="css/templatemo-style.css">                                   <!-- Templatemo style -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
          <![endif]-->
      </head>
        <style type="text/css">

        center{
          color: #69c6ba ;
        }

</style>
      <body>
        <div class="tm-main-content" id="top">
            <div class="tm-top-bar-bg"></div>    
            <div class="tm-top-bar" id="tm-top-bar">
                <div class="container">
                    <div class="row">
                        <nav class="navbar navbar-expand-lg narbar-light">
                            <a class="navbar-brand mr-auto" href="#">
                               <a  href="#top"> <img src="img/logocopie.png" width="15%" height="15%" 
                                     alt="Site logo" id="logo" style="padding-bottom:20px;"> </a>
                                <!--<h1> <a  href="#top">  Travel </a></h1> --> 
                            </a>
                            <button type="button" id="nav-toggle" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#mainNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div id="mainNav" class="collapse navbar-collapse tm-bg-white">
                                <ul class="navbar-nav ml-auto">
                                  <li class="nav-item">
                                    <a class="nav-link active" href="#top">Accueil <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tm-section-2">Meilleures destinations</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tm-section-3">Lieux recommandés</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tm-section-4">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#tm-section-5" onclick="hr()">Admin</a>
                                </li>
                                
                               
                            </ul>
                        </div>                            
                    </nav>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- .tm-top-bar -->

        <div class="tm-page-wrap mx-auto">
            <section class="tm-banner">
                <div class="tm-container-outer tm-banner-bg">
                    <div class="container">

                        <div class="row tm-banner-row tm-banner-row-header">
                            <div class="col-xs-12">
                                <div class="tm-banner-header">
                                    <h1 class="text-uppercase tm-banner-title">Bienvenu</h1>
                                    <img src="img/dots-3.png" alt="Dots">
                                    <p class="tm-banner-subtitle">Nous vous aidons à choisir le meilleur.</p>
                                    <a href="javascript:void(0)" class="tm-down-arrow-link"><i class="fa fa-2x fa-angle-down tm-down-arrow"></i></a>       
                                </div>    
                            </div>  <!-- col-xs-12 -->                      
                        </div> <!-- row -->
                        <div class="row tm-banner-row" id="tm-section-search">

                            <form action="disponibilite.php" method="POST" class="tm-search-form tm-section-pad-2">
                                <div class="form-row tm-search-form-row">                                
                                    <div class="form-group tm-form-group tm-form-group-pad tm-form-group-1">
                                        <label for="inputCity">
                                        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp                                    &nbsp&nbsp&nbsp&nbsp&nbsp
                                        Choisir votre destination</label> <br><br>
                                       <!-- <input name="destination" type="text" class="form-control" id="inputCity" placeholder="Entrer votre destination..."> -->

                                       <select name='destination' class="text-uppercase btn-primary tm-btn" style="width:300px;">
                                       <?php
                                       include('connexion.php');
                                          $req="select * from offre group by ville_destination";
                                          $res=$cnx->query($req);
                                          while ($data=$res->fetch_assoc()){ ?> 
                                           <option value="<?=$data['ville_destination']?>" ><?=$data['ville_destination']?></option>        
                                       <?php }?>        
                                      </select>
                                      
                                    </div>
                                    <div class="form-group tm-form-group ">                                   
                                        <div class="form-group tm-form-group tm-form-group-pad tm-form-group-2">
                                            

                                        </div>
                                        <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3">                                       
                                                                       
                                        </div>
                                        <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3">

                                                                               
                                        </div>
                                    </div>
                                   
                                </div> <!-- form-row -->
                                <div class="form-row tm-search-form-row">

                                    <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3" id="inputCheckIn">
                                        <!-- id="inputCheckIn" qui fais la disposition des photos  au dessous -->
                                    </div>

                                    <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3" id="inputCheckOut">
                                        <!--  id="inputCheckOut" qui fais la disposition des photos  au dessous -->
                                    </div>
                                    
                                    <div class="form-group tm-form-group tm-form-group-pad tm-form-group-1">
                                      <!--  <a href="disponibilite.php" target="_blank">Voir disponibilité</a> -->
                                      <input type="submit" name="disponibilite" value="Voir les disponibilités" class="text-uppercase btn-primary tm-btn">
                                    </div>
                                        
                                </div>                              
                            </form>   
                            <?php
                                 if(isset($_POST['disponibilite'])){                           
                                    $_SESSION['destination'] = $_POST['destination'];
                                  }                      
                            ?>                           
                       
                        </div> <!-- row -->
                        <div class="tm-banner-overlay"></div>
                   
                    </div>  <!-- .container -->                   
                </div>     <!-- .tm-container-outer -->                 
            </section>

            <section class="p-5 tm-container-outer tm-bg-gray">            
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 mx-auto tm-about-text-wrap text-center">                        
                            <h2 class="text-uppercase mb-4">Votre <strong>TRAVEL</strong> est notre priorité</h2>
                            <p class="mb-4">Pas d'auteur, soyons une frange intelligente de souvenirs, un grand carton de masse Le film ne veut pas choisir. C'est le grand super-héros, le temps d'avant le besoin, le temps de la propagande.</p>
                            <a href="maroc/maroc.php" class="text-uppercase btn-primary tm-btn">Continuer à explorer</a>                              
                        </div>
                    </div>
                </div>           
            </section>
            
            <div class="tm-container-outer" id="tm-section-2">
                <section class="tm-slideshow-section">
                    <div class="tm-slideshow">
                        <img src="nord/tanger nord.jpg" alt="Image" width="300px" height="250px">
                        <img src="nord/Chefchaouen nord.jpg" alt="Image" width="300px" height="250px">
                        <img src="nord/Tetouan.jpg" alt="Image" width="300px" height="250px">    
                    </div>
                    <div class="tm-slideshow-description tm-bg-primary">
                        <h2 class="">Endroits les plus célèbres du Nord</h2>
                        <ul>
                         <li> Al Hoceïma.</li>
                         <li> Chefchaouen.</li>
                         <li> Cap-de-l'Eau (Ras-el-Ma)</li>
                         <li> Cap Spartel.</li>
                         <li> Ceuta (Sebta)</li>
                         <li> Cabo Negro.</li>
                         <li> El Jebha.</li>
                         <li> Tétouan.</li>
                        </ul>
                        <a href="maroc/maroc.php" class="text-uppercase tm-btn tm-btn-white tm-btn-white-primary">Continue</a>
                    </div>
                </section><br>
                <section class="clearfix tm-slideshow-section tm-slideshow-section-reverse">

                    <div class="tm-right tm-slideshow tm-slideshow-highlight">
                        <img src="sud/kasbah-taourirte Ouarzazte 2.jpeg" alt="Image" width="300px" height="250px">
                        <img src="sud/dunes de  merzouga.jpeg" alt="Image" width="300px" height="250px">
                        <img src="sud/cap spartel.jpg" alt="Image" width="300px" height="250px">
                    </div> 

                    <div class="tm-slideshow-description tm-slideshow-description-left tm-bg-highlight">
                        <h2 class="">Endroits les plus célèbres du Sud</h2>
                        <ul>
                         <li> La kasbah Taourirt à Ouarzazate.</li>
                         <li> Le ksar d'Aït Benhaddou.</li>
                         <li> La palmeraie de Skoura.</li>
                         <li> Cap Spartel.</li>
                         <li> Kelaat M'Gouna et la vallée des Roses.</li>
                         <li> La vallée des gorges du Dadès.</li>
                         <li> Les dunes de Merzouga.</li>
                         <li> Les montagnes du Djebel Saghro.</li>
                        </ul>
                        <a href="maroc/maroc.php" class="text-uppercase tm-btn tm-btn-white tm-btn-white-highlight">Continuer</a>
                    </div>                        
                </section><br>
                <section class="tm-slideshow-section">
                    <div class="tm-slideshow">
                        <img src="est/Jardin Majorelle.jpg" alt="Image" width="300px" height="250px">
                        <img src="est/Jemaa el-Fnaa.jpg" alt="Image" width="300px" height="250px">
                        <img src="est/Bahia Place.jpg" alt="Image" width="300px" height="250px">
                    </div>
                    <div class="tm-slideshow-description tm-bg-primary">
                        <h2 class="">Endroits les plus célèbres du Est</h2>
                        <ul>
                         <li> Jemaa el-Fnaa.</li>
                         <li> Jardin Majorelle.</li>
                         <li> Bahia Place.</li>
                         <li> Mosquée Hassan II.</li>
                         <li> Koutoubia.</li>
                         <li> Toubkal.</li>
                         <li> Saadien's Tombs.</li>
                         <li> El Badii.</li>
                        </ul>
                        <a href="maroc/maroc.php" class="text-uppercase tm-btn tm-btn-white tm-btn-white-primary">Continuer</a>
                    </div>
                </section><br>
                <section class="clearfix tm-slideshow-section tm-slideshow-section-reverse">

                    <div class="tm-right tm-slideshow tm-slideshow-highlight">
                        <img src="ouest/chefchaouen.jpg" alt="Image" width="300px" height="250px">
                        <img src="ouest/Les cascades d'Ouzoud.jpg" alt="Image" width="300px" height="250px">
                        <img src="ouest/L'Oasis de Fint.jpg" alt="Image" width="300px" height="250px">
                    </div> 

                    <div class="tm-slideshow-description tm-slideshow-description-left tm-bg-highlight">
                        <h2 class="">Endroits les plus célèbres du Ouest</h2>
                        <ul>
                         <li> Les gorges de Toudgha.</li>
                         <li> Les gorges du Dadès.</li>
                         <li> Merzouga et les dunes du Sahara.</li>
                         <li> La vallée du Paradis.</li>
                         <li> Aït-ben-Haddou.</li>
                         <li> L'Oasis de Fint.</li>
                         <li> Les cascades d'Ouzoud.</li>
                         <li> Chefchaouen.</li>
                        </ul>
                        <a href="maroc/maroc.php" class="text-uppercase tm-btn tm-btn-white tm-btn-white-highlight">Continuer</a>
                    </div>                        
                </section><br>
            </div>       
            <br> 
            <div class="tm-container-outer" id="tm-section-3">
                <center><b><b>LES LIEUX RECOMMANDES AU DIFFERENTES ZONES DU MAROC</b></b></center><br>
              <form action="" method="POST">
               
                <ul class="nav nav-pills tm-tabs-links">
                    <li class="tm-tab-link-li">
                      <input type="submit" name="sud" value="SUD" class="text-uppercase btn-primary tm-btn">
                    </li>
                    <li class="tm-tab-link-li">    
                      <input type="submit" name="nord" value="NORD" class="text-uppercase btn-primary tm-btn">            
                    </li>
                    <li class="tm-tab-link-li">
                     <input type="submit" name="est" value="EST" class="text-uppercase btn-primary tm-btn">
                    </li>
                    <li class="tm-tab-link-li">
                      <input type="submit" name="ouest" value="OUEST" class="text-uppercase btn-primary tm-btn">
                    </li>
                </ul>
           <br><br>
                <!-- PARTIE SUD -->
               <?php 
                if(isset($_POST['sud'])) {
                      include('connexion.php');
                          $req1="select * from offre where zone='".$_POST['sud']."'";

                          $res1=$cnx->query($req1);
                           while ($data1=$res1->fetch_assoc()){

                         echo " <script>
                              window.scroll(0,3100);
                            </script>
                          <table align='center' hspace='10' vspace='6'>   
                                       
                                   <div class='tab-pane fade' id='4a'>         
                            <div class='tm-recommended-place-wrap'>   
                             <div class='tm-recommended-place'>
                              <tr>
                                <td><img src='img/{$data1['photo']}' alt='Imag' class='img-fluid tm-recommended-img'></td>
                                <td style='width:100px'></td>
                                <td><div class='tm-recommended-description-bo'>
                                    <h3 class='tm-recommended-title'>{$data1['zone']}</h3>
                                    <p class='tm-text-highlight'>{$data1['ville_destination']}</p>
                                    <p class='tm-text-gray'>{$data1['periode']} Jours  //  {$data1['nombre_personne']} Personnes  //  Hotel {$data1['nom_hotel']}</p> 
                                    
                                </div></td>
                                <td style='width:100px'></td>
                                <td> <a class='tm-recommended-price-box'>
                                   <p class='tm-recommended-price'>{$data1['prix_total']}DH</p></td>       
                                </a></tr>

                            </div>    
                         </div> 
                         </table>"; }
                    }
                ?>
                  <!-- PARTIE NORD -->
               <?php 
                if(isset($_POST['nord'])) {
                      include('connexion.php');
                          $req2="select * from offre where zone='".$_POST['nord']."'";

                          $res2=$cnx->query($req2);
                           while ($data2=$res2->fetch_assoc()){

                         echo "  <script>
                              window.scroll(0,3100);
                            </script>
                         <table align='center' hspace='10' vspace='6'>                      
                           <div class='tab-pane fade' id='4a'>         
                            <div class='tm-recommended-place-wrap'>   
                             <div class='tm-recommended-place'>
                              <tr>
                                <td><img src='img/{$data2['photo']}' alt='Imag' class='img-fluid tm-recommended-img'></td>
                                <td style='width:100px'></td>
                                <td><div class='tm-recommended-description-bo'>
                                    <h3 class='tm-recommended-title'>{$data2['zone']}</h3>
                                    <p class='tm-text-highlight'>{$data2['ville_destination']}</p>
                                    <p class='tm-text-gray'>{$data2['periode']} Jours  //  {$data2['nombre_personne']} Personnes   //  Hotel {$data2['nom_hotel']}</p> 
                                    
                                </div></td>
                                <td style='width:100px'></td>
                                <td> <a class='tm-recommended-price-box'>
                                   <p class='tm-recommended-price'>{$data2['prix_total']}DH</p></td>       
                                </a></tr>

                            </div>    
                         </div> 
                         </table>"; }
                    }
                ?>
                    <!-- PARTIE est -->
               <?php 
                if(isset($_POST['est'])) {
                      include('connexion.php');
                          $req3="select * from offre where zone='".$_POST['est']."'";

                          $res3=$cnx->query($req3);
                           while ($data3=$res3->fetch_assoc()){

                         echo "  <script>
                              window.scroll(0,3100);
                            </script>
                         <table align='center' hspace='10' vspace='6'>                      
                           <div class='tab-pane fade' id='4a'>         
                            <div class='tm-recommended-place-wrap'>   
                             <div class='tm-recommended-place'>
                              <tr>
                                <td><img src='img/{$data3['photo']}' alt='Imag' class='img-fluid tm-recommended-img'></td>
                                <td style='width:100px'></td>
                                <td><div class='tm-recommended-description-bo'>
                                    <h3 class='tm-recommended-title'>{$data3['zone']}</h3>
                                    <p class='tm-text-highlight'>{$data3['ville_destination']}</p>
                                    <p class='tm-text-gray'>{$data3['periode']} Jours  //  {$data3['nombre_personne']} Personnes   //  Hotel {$data3['nom_hotel']}</p> 
                                    
                                </div></td>
                                <td style='width:100px'></td>
                                <td> <a class='tm-recommended-price-box'>
                                   <p class='tm-recommended-price'>{$data3['prix_total']}DH</p></td>       
                                </a></tr>

                            </div>    
                         </div> 
                         </table>"; }
                    }
                ?>
                     <!-- PARTIE Ouest -->
               <?php 
                if(isset($_POST['ouest'])) {
                      include('connexion.php');
                          $req4="select * from offre where zone='".$_POST['ouest']."'";

                          $res4=$cnx->query($req4);
                           while ($data4=$res4->fetch_assoc()){

                         echo " <script>
                              window.scroll(0,3100);
                            </script>
                          <table align='center' hspace='10' vspace='6'>                      
                           <div class='tab-pane fade' id='4a'>         
                            <div class='tm-recommended-place-wrap'>   
                             <div class='tm-recommended-place'>
                              <tr>
                                <td><img src='img/{$data4['photo']}' alt='Imag' class='img-fluid tm-recommended-img'></td>
                                <td style='width:100px'></td>
                                <td><div class='tm-recommended-description-bo'>
                                    <h3 class='tm-recommended-title'>{$data4['zone']}</h3>
                                    <p class='tm-text-highlight'>{$data4['ville_destination']}</p>
                                    <p class='tm-text-gray'>{$data4['periode']} Jours  //  {$data4['nombre_personne']} Personnes   //  Hotel {$data4['nom_hotel']}</p> 
                                    
                                </div></td>
                                <td style='width:100px'></td>
                                <td> <a class='tm-recommended-price-box'>
                                   <p class='tm-recommended-price'>{$data4['prix_total']}DH</p></td>       
                                </a></tr>

                            </div>    
                         </div> 
                         </table>"; }
                    }
                ?>
                       </form>
                    </div> 
                </div>
            </div>
              
                    
                    </div> <!-- tab-pane -->   
             
                    </div> 
                </div>
            </div> 

            <div class="tm-container-outer tm-position-relative" id="tm-section-4">
                <div id="google-map"></div>             
                <form action="index.php" method="post" class="tm-contact-form">
                    <div class="form-group tm-name-container">
                        <input type="text" id="contact_name" name="nom" class="form-control" placeholder="Nom" equired/>
                    </div>
                    <div class="form-group tm-email-container">
                        <input type="email" id="contact_email" name="email" class="form-control" placeholder="Email" required/>
                    </div>
                    <div class="form-group">
                        <input type="text" id="contact_subject" name="sujet" class="form-control" placeholder="Sujet" required/>
                    </div>
                    <div class="form-group">
                        <textarea id="contact_message" name="message" class="form-control" rows="9" placeholder="Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary tm-btn-primary tm-btn-send text-uppercase" name="envoyer"> Envoyer un message</button>
                </form>
                <?php                
                        if (isset($_POST['envoyer'])) {
                            require('connexion.php');
                            $a=$_POST['nom'];
                            $b=$_POST['email']; 
                            $c=$_POST['sujet'];
                            $d=$_POST['message'];
                            $req="INSERT INTO contact VALUES ('$a','$b','$c','$d')";
                            $res=$cnx->query($req);   
                        }
                    ?> 
                
            </div> <!-- .tm-container-outer -->

            <footer class="tm-container-outer">
                <p class="mb-0">Copyright © <span class="tm-current-year">2022</span> Travel 
                    
                . Designed by Chayma et Salma</a></p>
            </footer>
        </div>
    </div> <!-- .main-content -->

    <!-- load JS files -->
    <script src="js/jquery-1.11.3.min.js"></script>             <!-- jQuery (https://jquery.com/download/) -->
    <script src="js/popper.min.js"></script>                    <!-- https://popper.js.org/ -->       
    <script src="js/bootstrap.min.js"></script>                 <!-- https://getbootstrap.com/ -->
    <script src="js/datepicker.min.js"></script>                <!-- https://github.com/qodesmith/datepicker -->
    <script src="js/jquery.singlePageNav.min.js"></script>      <!-- Single Page Nav (https://github.com/ChrisWojcik/single-page-nav) -->
    <script src="slick/slick.min.js"></script>                  <!-- http://kenwheeler.github.io/slick/ -->
    <script src="js/jquery.scrollTo.min.js"></script>           <!-- https://github.com/flesler/jquery.scrollTo -->
    <script> 

        /* Google Maps
        ------------------------------------------------*/
        var map = '';
        var center;

        function initialize() {
            var mapOptions = {
                zoom: 16,
                center: new google.maps.LatLng(31.5362633,-8.7597454),
                scrollwheel: false
            };

            map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);

            google.maps.event.addDomListener(map, 'idle', function() {
              calculateCenter();
          });

            google.maps.event.addDomListener(window, 'resize', function() {
              map.setCenter(center);
          });
        }

        function calculateCenter() {
            center = map.getCenter();
        }

        function loadGoogleMap(){
            var script = document.createElement('script');
            script.type = 'text/javascript';
            script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDVWt4rJfibfsEDvcuaChUaZRS5NXey1Cs&v=3.exp&sensor=false&' + 'callback=initialize';
            document.body.appendChild(script);
        } 

        /* DOM is ready
        ------------------------------------------------*/
        $(function(){

            // Change top navbar on scroll
            $(window).on("scroll", function() {
                if($(window).scrollTop() > 100) {
                    $(".tm-top-bar").addClass("active");
                } else {                    
                 $(".tm-top-bar").removeClass("active");
                }
            });

            // Smooth scroll to search form
            $('.tm-down-arrow-link').click(function(){
                $.scrollTo('#tm-section-search', 300, {easing:'linear'});
            });

            // Date Picker in Search form
            var pickerCheckIn = datepicker('#inputCheckIn');
            var pickerCheckOut = datepicker('#inputCheckOut');

            // Update nav links on scroll
            $('#tm-top-bar').singlePageNav({
                currentClass:'active',
                offset: 60
            });

            // Close navbar after clicked
            $('.nav-link').click(function(){
                $('#mainNav').removeClass('show');
            });

            // Slick Carousel
            $('.tm-slideshow').slick({
                infinite: true,
                arrows: true,
                slidesToShow: 1,
                slidesToScroll: 1
            });

            loadGoogleMap();                                       // Google Map                
            $('.tm-current-year').text(new Date().getFullYear());  // Update year in copyright           
        });

         
        // les fonctions de l'inscription et de l'authentification
        function hr(){location.href="connecter/connecteradmin.php";} 

    </script>             
   
<!-- <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=maroc%20chichaoua&t=&z=9&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com/divi-discount/">divi discount</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">embed google maps in gmail</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div> -->

</body>
</html>
