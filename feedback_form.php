<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>FEEDBACK</title>
</head>

<body>
	
	<?php
	
	#Reception des donner de l'utilisateur envoyer par le formule attraver le name methode post
	$name=$_POST['name'];
	$email_address=$_POST['mail'];
	$message=$_POST['message'];
	$telephone=$_POST['phone'];
	$internet=$_POST['web'];
	
	#filtrage des donnees afin d'eviter tout risque de piratage en enlevant les caracteres speciaux
	#creation de la fonction de filtrage
	
	function
		filter_email_header($form_field){
		return
			preg_replace('/[nr!/>^|$%*&]+/',"",$form_field);
	}
	#utilisation de la fonction de filtrage creer pour filtre l'adresse email de l'utilisateur
	$email_address=filter_email_header($email_address);
	#envoi de l'email
	
	$hearders="From:$email_address";
	$send=mail('stee@gmail.com','Feedback Form Submission',$message,$hearders);
	
	#Remerciement de l'utilisateur ou notification d'un probleme
	
	if($send){
		?>
	<html>
		<head>
		<title>Merci</title>
		</head>
		<body>
		<h1>Merci !</h1>
			<p>Merci pour votre message. Nous vous répondrons dans le plus bref delai!</p>
		</body>
	</html>
	<?php
	} else {
		?>
	<html>
	<head>
	<title>Quelque chose ne va pas</title>
	</head>
	<body>
	<h1>Quelque chose ne va pas</h1>
	<p>Nous ne pouvons pas envoyer votre message. Veillez reesayer svp!.</p>
	</body>
	</html>
	<?php
	}
	?>
</body>
</html>