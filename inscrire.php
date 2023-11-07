<?php 
						
if(isset($_POST['inscrir'])){
		//echo "hh".$_POST['Email'];
				            include('connexion.php');
				            echo "1";
				 	$n=$_POST['nom'];
				 	$p=$_POST['prenom'];
				 	$t=$_POST['tel'];
				 	$e=$_POST['email'];
				 	$pw=$_POST['passe'];
				 	
				 	
				 
$req="INSERT INTO client (prenom,nom,email,motPass,tel)VALUES('$p','$n','$e','$pw',$t)";
//VALUES('null',0,'$p','$n','francais',0,'$l','$pw','carte',1233,0,1232,'$e',$t)";
				 	echo $req;
				 	$res=$cnx->query($req);
				 	echo $res;
				 	if($res){
				 		echo "l`ajout avec succes";
				 	}
				 	else{
				 		echo "l`ajout echoue";
				 	}
				 }
									 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="styleinscrire.css" media="screen" type="text/css" />
</head>
<body>
<h1>Inscription</h1>
	<form method="POST">
   		<div class="login-wrap">
   			<div class="login-html">
				        <label for="tab-2" class="tab">S`inscrir</label>
				        <input id="tab-2" type="radio" name="tab" class="sign-up">
		<div class="login-form">		
		<div class="sign-up-htm">
			<div class="groupe">
				    <label for="user" class="label" name="nom">Nom</label>
					<input id="user" type="text" class="input" name="nom">
				</div>
				<div class="groupe">
					<label for="pass" class="label" name="prenom">Prenom</label>
					<input id="pass" type="text" class="input" name="prenom">
			   </div>
				<div class="groupe">
					<label for="pass" class="label" name="tel">Numero de telephon</label>
					<input id="pass" type="tel" class="input" name="tel">
				</div>
				<div class="groupe">
					<label for="pass" class="label" name="email" >Addresse email</label>
					<input id="pass" type="text" class="input" name="email">
				</div>
				<div class="groupe">
					<label for="pass" class="label" name="passe">Mot de passe</label>
					<input id="pass" type="password" class="input" name="passe">
				</div>
				<div class="groupe">
					<input  class="button" type="submit"name="inscrir" value="inscrir">
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Deja inscrie?</label>
				</div>

		</div>
	
	</div>
</div>
</div>

	</form>
</body>
</html>