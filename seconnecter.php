<?php 
		$ch=false;
						if(isset($_POST['connecter'])){
							//echo "hh".$_POST['Email'];
            include('connexion.php');
			$req="select * from client where email='".$_POST['Email']."' and motPass='" .$_POST['Pass']."'";
			//echo $req;
						$res=$cnx->query($req);
						$data=$res->fetch_assoc();
						  //echo"chi haja 1";
						if($res->num_rows==1){
							header('location:index.php');
						} 
						else {

							$ch=true;
							
						}
					}
					 ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="styleconnecter.css" media="screen" type="text/css" />
</head>
<body>
<h1>Authentification</h1>
   	<form method="POST">
   		<div class="login-wrap">
   			<div class="login-html">
						<input id="tab-1" type="radio" name="tab" class="sign-in" checked>
								         <label for="tab-1" class="tab">Se connecter</label>
					
		<div class="login-form">	
		<div class="sign-in-htm">					         
		
			<div class="group">
						<label for="user" class="label" >Addresse email</label>
						<input id="user" type="text" class="input" name="Email">
					</div>	
				
				
			
				<div class="group">
										<label for="pass" class="label" >Mot de passe</label>
										<input id="pass" type="password" class="input" data-type="password"name="Pass">
					</div>	
			  
				<div class="group">
				<td><center><input class="button" type="submit" name="connecter" value="Se connecter"> </center></td>
			    </div>
			<?php
									if($ch){
                                       echo "<h3>Adresse email ou mot de passe incorrecte</h3>";
									}
					?>
	</div>
	</div>
	</div>
	</div>
	</form>
</body>
</html>