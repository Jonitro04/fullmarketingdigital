<!DOCTYPE html>
<html>
	<head>
		<title>Lemoinscherdefrance.com - Inscription</title>
		<meta charset='utf-8'>
		<link rel="stylesheet" type="text/css" href="../../css/style.css">
		<style type="text/css">
		nav{
			width: 100%;
			height: 3em;
			background-color: rgba(255, 255, 255, 0.5);
			margin-top: 1em; 
		}
		nav ul li{

		}
		fieldset{
			clear: left;
			width: 96%;
			height: 31.5em;
			background-color: white;
			text-align: center;
			box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.5); 
		}
		</style>

		<script type="text/javascript" src="../../js/popup.js"></script>
	</head>
	<body>
		<header>	
			<div id='logo'>	
			<img src="../../images/Logo-lemoinscherdefrance.png" alt="logo Le moins cher de france" width="130%">	
			</div>
			<nav>
				<ul>
					<li><a href="../../index.php">Accueil</a></li>
					<li><a href="inscript.php">Inscription</a></li>
					<li><a href="desinscription.php" id='seul'>Désinscription</a></li>
					<li><a href="charte.php">Charte</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</nav>
		</header>
		<section>
			<div class="section1">
				<article class="img"><img src="../../images/soldes-2015.png" alt="Soldes 2015" title="Solde 2015" width='100%'></article>
				<article class="img1"><img src="../../images/bon_plan.png" alt="Bon Plan" title="Bon Plan" width='100%'></article>
				<article class="img1"><img src="../../images/vacance2015.jpg" alt="vacance 2015" title="vacance 2015" width='100%'></article>
			</div>
			<div class="section2"><article class="img2">
				<h1>Désinscription</h1>
				<br>
				<p>
					Vous avez demandé à vous désabonner des messages promotionnels de nos partenaires
				</p>
				<form method="post" >
					<input type='mail' name='mail' iid='mail' placeholder='Votre e-mail' maxlength='200' autofocus>
														<br>
														<br>
					<input type="submit" name="désinscript" value="Valider votre désinscription">
				</form>
			</article>
			<article class="img"><img src="../../images/imagesbonplanent.png" alt="img" title="image" width='100%'></article>
			</div>
			
		</section>
		<footer>
			<p>© Copyright 2015 - Lemoinscherdefrance.com - <a href="#" onclick="javascript:open_infos();">Mentions Légales</a> - <a href="#">Plan du site</a></p>
		</footer>
	</body>
</html>
<?php

ini_set('display_errors',1);
    error_reporting(E_ALL);


$mysqli = new Mysqli('db571455915.db.1and1.com', 'dbo571455915', 'mc495900', 'db571455915'); // le @ devant le new permet d'éviter le message d'erreur généré par php afin de le gérer proprement.
// ATTENTION : on ne met le @ que si on utilise le IF qui suit : (pour gérer les erreurs proprement)
if($mysqli->connect_error)
{
	die ("Un problème est survenu lors de la tentative de connexion à la BDD : ".$mysqli->error);
}
$mysqli->set_charset("UTF-8");// à utiliser en cas de pb d'encodage.
//print_r($mysqli);

$mail = @$_POST['mail'];

$mysqli->query('DELETE FROM user WHERE mail = "' .$mail.'"');


$mail = @htmlentities($_POST['mail']);
				$to = $mail;
				$objet = 'Comfirmation désabonnement';
				$message = 'Bonjour,
                                        

        Votre demande de désabonnement à bien été pris en compte.
                                        
                                        

Cordialement,
                                        

Ceci est un mail automatique, Merci de ne pas y répondre.';
				$headers = 'From: joel.sylvius18@gmail.com' . "\r\n" .
						'Reply-To: ' . "\r\n" .
						'X-Mailer: PHP/' . phpversion();
				mail($to, $objet, $message, $headers);
?>