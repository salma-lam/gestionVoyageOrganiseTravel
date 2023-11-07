<!DOCTYPEhtml>
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
  #p{
  border:2px dotted #69c6ba;
}
center{
  color: #69c6ba ;
}

</style>
 </head>
 <body>
<?php
                         include('connexion.php');
                          $req="select * from contact";
                          $res=$cnx->query($req); 
                          echo "<br><br><center class='tm-recommended-title'>VOILA LES MESSAGEES DE VOTRE CLIENTS:</center>";
                          	while($data=$res->fetch_assoc()){
                           echo "      
                           <div align='left'>      
                            <table align='center' hspace='10' vspace='6'>                      
                            <div class='tab-pane fade' id='4a'>         
                             <div class='tm-recommended-place-wrap'>   
                              <div class='tm-recommended-place'>
                                <tr>
                                 <td><b><b>{$data['nom']}</b</b</td>
                                 <td style='width:100px'></td>
                                 <td><div class='tm-recommended-description-bo'>
                                    <p class='tm-recommended-title'>{$data['email']}</p>
                                    <p class='tm-text-highlight'>{$data['sujet']}</p>
                                    <p class='tm-text-gray'>{$data['message']}</p> 
                                          
                                 </div></td>
         
                             </div>    
                           </div> <p id='p'></p> 
                          </table>
                          </div>";   // j'ai supprimer href='#'' du balise <a> 
                      }
                          
                           
                       
?>
</body>
</html>
