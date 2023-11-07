<?php
    session_start();
	require('fpdf184/fpdf.php');
	$pdf=new FPDF();
	$pdf->AddPage();
	
	$pdf->Cell(180,10,"", 0 , 1,'C' );
	$pdf->Ln();$pdf->Ln();$pdf->Ln();$pdf->Ln();
	$pdf->SetFont('Arial','B',15);
    $pdf->SetFillColor(105,198,186); //la couleur de remplissage
	$pdf->setTextColor(0,0,0);   //la couleur du texte

	/**$pdf->Cell(20,50,'',0,0,'C');
    $pdf->image("img/logo.png",10,10, 20,20);*/

    $pdf->Cell(180,10,"Formulaire de reservation", 1 , 1,'C',true);
	$pdf->Ln(); $pdf->Ln();
	include('connexion.php');
	$id_offre=$_GET['id_offre'];
	$req= "Select c.nom, c.prenom, c.email, o.ville_destination, o.periode, o.nombre_personne, o.prix_total, o.nom_hotel 
	from reservation r, client c, offre o 
	where o.id_offre=r.id_offre and r.id_client=c.id_client and o.id_offre=$id_offre and c.id_client='".$_SESSION['id_client']."'" ;
	$res=$cnx->query($req);
	$data=$res->fetch_assoc();
	$pdf->Cell(200,10,"Nom :  ".$data['nom'],0,1,'L');
	$pdf->Cell(200,10,"Prenom  :  ".$data['prenom'],0,1,'L');
	$pdf->Cell(200,10,"Email :  ".$data['email'],0,1,'L');
	$pdf->Cell(200,10,"Ville destination :  ".$data['ville_destination'],0,1,'L');
	$pdf->Cell(200,10,"Periode  :  ".$data['periode']." Jours",0,1,'L');
	$pdf->Cell(200,10,"Nombre personne :  ".$data['nombre_personne']." Personnes",0,1,'L');
	$pdf->Cell(200,10,"Prix total :  ".$data['prix_total']." DH",0,1,'L');
	$pdf->Cell(200,10,"Nom hotel  :  ".$data['nom_hotel'],0,1,'L');
    
	$pdf->Ln();	$pdf->Ln(); $pdf->Ln();
	$pdf->Cell(180,10,"Bienvenue chez Travel",1,1,'C',true);
    $pdf->Ln();
   
    $pdf->image("../img/logo.png",10,10, 30,30);

   $pdf->Output();

 ?>