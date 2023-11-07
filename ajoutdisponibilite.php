<?php 
session_start();

if (isset($_SESSION['dinsponibilite']))
 	$nb=count($_SESSION['dinsponibilite']);
else
	$nb=0;

$_SESSION['dinsponibilite'][$nb]['dispo'] = $_POST['dispo'];

header('location:index.php');


 ?>