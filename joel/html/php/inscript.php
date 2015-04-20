
<!DOCTYPE html>
<html>
	<head>
		<title>Lemoinscherdefrance.com - Inscription</title>
		<meta charset='utf-8'>
		<link rel="stylesheet" type="text/css" href="../../css/style.css">
                <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<style type="text/css">
                    form{
                        clear: left;
                        width: 96%;
                        padding: 1em;
                        border: 1px solid rgba(0, 0, 0, 1);
                        box-shadow: 0px 0px 30px rgba(0, 0, 0, 0.5);
                    }
                    form div + div{
                        margin-top: 1em;
                    }
                    label{
                        display:inline-block;
                        width: 40%;
                        text-align: left;
                    }
                    .label{
                        display: inline-block;
                        width: 90%;
                        text-align: left;
                    }
                    .lab{
                        font-size: 18px;
                        font-family: "apple-chancery";
                        color: rgba(255, 0, 0, 0.8);
                    }
                    input, textarea{
                        //font: 1em sans-serif;
                        width: 50%;
                        -moz-box-sizing: border-box;
                        box-sizing: border-box;
                        border: 1px solide rgba(0, 0, 0, 1);
                    }
                    .input{
                        width: 5%;
                    }
                    input:focus, textarea:focus{
                        border-color: rgba(255, 255, 255, 0.4);
                    }
                    textarea{
                        vertical-align: top;
                        height: 5em;
                        resize: vertical;
                    }
                    .boutton{
                        padding-left: 40%; 
                    }
                    boutton{
                        margin-left: .5em;
                    }
		</style>
		<script type="text/javascript" src="../../js/popup.js"></script>
                <script src="//code.jquery.com/jquery-1.10.2.js"></script>
                <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
                <script>
                     $(function() {
                     $( "#datepicker" ).datepicker({dateFormat: 'dd-mm-yy'}).val();
                    });
                </script>
	</head>
	<body>
		<header>	
			<div id='logo'>	
			<img src="../../images/Logo-lemoinscherdefrance.png" alt="logo Le moins cher de france" width="130%">	
			</div>
			<nav>
				<ul>
					<li><a href="../../index.php">Accueil</a></li>
					<li><a href="inscript.php" id='seul'>Inscription</a></li>
					<li><a href="desinscription.php">Désinscription</a></li>
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
			<div class="section2">
				<form method='post' enctype='multipart/form-data'>
                                    <label class='lab'>Formulaire d'inscription</label>
                                    <br><br>
                                                    <div>
                                                        <label for="mail">Mail :</label> 
							<input type='mail' name='mail' id='mail' placeholder='exemple@exemple.com' maxlength='200' required aria-required="true" autofocus>
                                                    </div>
                                                    <div>
                                                        <label for="mdp">Mot de passe :</label>					
                                                        <input type='password' name='mdp' id='mdp' placeholder='Mot de passe' required aria-required="true" maxlength='200'>
                                                    </div>		
                                                    <div>
                                                        <label for="cmdp">Confirmer le mot de passe :</label>					
							<input type='password' name='mdpc' id='cmdp' placeholder='Confirmer le mot de passe' required aria-required="true" maxlength='200'>
                                                    </div>
                                                    <div>
							<label class='lab'>Informations personnelles</label>
                                                    </div>
                                                    <div>
                                                        <label for="nom">Nom :</label>					
							<input type='text' name='nom' id='nom' placeholder='Nom'required aria-required="true" maxlength='200'>
                                                    </div>
                                                    <div>
                                                        <label for="prenom">Prénom :</label>					
							<input type='text' name='prenom' id='prenom' placeholder='Prénom' required aria-required="true" maxlength='200'>
                                                    </div>
                                                        <div>
                                                            <label>Civilité</label>
                                                            <select name="civ" required aria-required="true">
                                                                <option value="m"> M </option>
                                                                <option value="mme"> Mme </option>
                                                                <option value="mlle"> Mlle </option>
                                                            </select>
                                                        </div>
                                                    <div>
                                                        <label for="adresse">Adresse :</label>				
							<input type='text' name='adress' id='adresse' placeholder='adresse' required aria-required="true" maxlength='200'>
                                                    </div>
                                                    <div>
                                                        <label for="cp">Code Postal :</label>					
                                                        <input type='number' name='cp' id='cp' placeholder='code postale' min='00000' max='99999' required aria-required="true" >
                                                    </div>
                                                    <div>
                                                        <label for="ville">Ville :</label>					
							<input type='text' name='ville' id='ville' placeholder='Ville' maxlength='200' required aria-required="true" >
                                                    </div>
                                                    <div>
                                                        <label for="datepicker">Date de naissance :</label> 
                                                        <input type="text" name="date" id="datepicker" placeholder="Date de naissance" required aria-required="true" >
                                                    </div>    
									<br>
                                                    <label class='lab'>Vérification</label>
                                                    <br><br>
                                                    <div>
                                                        <input type='checkbox' name='condition' class="input" value="1" id='conditionutil' required aria-required="true" ><label for='conditionutil' class="label">J'ai lu, compris et accepté les termes et conditions d'utilisation.</label>
                                                    </div>
                                                    <div>
                                                        <input type='checkbox' name='newsletter' class="input" value="1" id='newsletter'  ><label for='newsletter' class="label">J'accepte de recevoir par email les offres des partenaires.</label>
                                                    </div>						
                                                    <div class="boutton">
                                                        <input type='submit' name='valider' value='Valider et confirmer'>
                                                    </div>								
                                </form>
                            
			</div>
			<a href="#overlay" data-rel="popup" data-role="button" data-inline="true">Recouvrement avec le thème A</a>
<div id="overlay" data-role="popup" data-overlay-theme="a" class="ui-content">
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


                if (!empty($_POST)) {
                                $mysqli->query("INSERT INTO user (id, mail, mdp, nom, prenom, civilite, adresse, cp, ville, date, optin, optinpart) VALUES 
					  ('','".$_POST['mail']."', '".$_POST['mdp']."', '".$_POST['nom']."', '".$_POST['prenom']."', '".$_POST['civ']."', 
					  	'".$_POST['adress']."', '".$_POST['cp']."', '".$_POST['ville']."', '".$_POST['date']."', '".$_POST['condition']."',
					  	 '".$_POST['newsletter']."')");
                                }
                $mail = @htmlentities($_POST['mail']);
				$to = $mail;
				$objet = 'Comfirmation d\'incripstion';
				$message = 'Bonjour,
                                        

        Votre inscription à bien été pris en compte.
Nous sommes heureux de vous compter parmis nos clients
                                        

Cordialement,
                                        

Ceci est un mail automatique, Merci de ne pas y répondre.';
				$headers = 'From: joel.sylvius18@gmail.com' . "\r\n" .
						'Reply-To: ' . "\r\n" .
						'X-Mailer: PHP/' . phpversion();
				mail($to, $objet, $message, $headers);
?>