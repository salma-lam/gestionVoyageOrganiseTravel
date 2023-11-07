<?php 
    $ch1=false;
   if (isset($_POST['inscrir'])) {		 	
    include('connexion.php');
				 	$n=$_POST['nom'];
				 	$p=$_POST['prenom'];
				 	$e=$_POST['email'];
				 	$pw=$_POST['passe'];
    $req1="select * from client where email='$e'";	
		$res1=$cnx->query($req1)	;
		$data1=$res1->fetch_assoc();
          if($res1->num_rows==0){
           $req="INSERT INTO client (nom,prenom,email,motPass)VALUES('$n','$p','$e','$pw')";
				 	  $res=$cnx->query($req);
				 	//echo $res;
				 	if($res){
				 		header('location:../index.php');
				 	}				 	
				 }
				 else {
				 		$ch1=true;;
				 	}			
			}
		 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>Inscription</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">ESPACE DE CLIENTS</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(images/bg-1.jpg);"></div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h5 class="mb-4">INSCRIRE</h5>
			      		</div>
								<div class="w-100">
								<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
			      	</div>
							<form action="" method="POST" class="signin-form">
								<div class="form-group mt-3">
			      			<input type="text" class="form-control" name="nom" required>
			      			<label class="form-control-placeholder" for="username">Votre nom</label>
			      		</div>
		           <div class="form-group mt-3">
			      			<input type="text" class="form-control" name="prenom" required>
			      			<label class="form-control-placeholder" for="username">Votre prenom</label>
			      		</div>
			      		<div class="form-group mt-3">
			      			<input type="text" class="form-control" name="email" required>
			      			<label class="form-control-placeholder" for="username">Votre email</label>
			      		</div>
		            <div class="form-group">
		              <input id="password-field" type="password" class="form-control" name="passe" required>
		              <label class="form-control-placeholder" for="password">Votre mot de passe</label>
		              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
		            </div>
		            <div class="form-group">
		            	<a href='connecter/connecter.php?id_offre=<?=$_GET['id_offre']?>'><input type="submit" class="form-control btn btn-primary rounded submit px-3" name="inscrir" value="s'inscrire">
		            </div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
			            	<label class="checkbox-wrap checkbox-primary mb-0">Remember Me
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
										</label>
									</div>
									<div class="w-50 text-md-right">
										<!--<a href="#">Forgot Password</a>-->
									</div>
		            </div>
		          </form>
		          <p class="text-center"> <a href="../index.php">Se connecter</a></p>
		          <?php                 
                  if ($ch1) {
                  	echo " <center><b> Vous etes deja un membre</b></center>";
                  }
		        ?>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

