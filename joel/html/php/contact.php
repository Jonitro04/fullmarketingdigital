<!DOCTYPE html>
<html>
	<head>
		<title>Contact</title>
		<meta charset='utf-8'>
		<link rel="stylesheet" type="text/css" href="../../css/style.css">
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
					<li><a href="desinscription.php">Désinscription</a></li>
					<li><a href="charte.php">Charte</a></li>
					<li><a href="contact.php" id='seul'>Contact</a></li>
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
                                    <label class='lab'>Formulaire de Contact</label>
                                    <br><br>
                                    <div>
                                        <label for="mail">Email* :</label>
                                        <input type='mail' name='mail' id='mail' placeholder='exemple@exemple.com' maxlength='200' required aria-required="true" autofocus>
                                    </div>requ
                                    <div>
                                        <label>Civilité</label>
                                            <select name="civ">
                                                <option value="m"> M </option>
                                                <option value="mme"> Mme </option>
                                                <option value="mlle"> Mlle </option>
                                            </select>
                                    </div>
                                    <div>
                                        <label for="nom">Nom : </label>
                                        <input type='text' name='nom' id='nom' placeholder='Nom' required aria-required="true" maxlength='200'>
                                    </div>									
                                    <div>
                                        <label for="objet">Objet* : </label>
                                        <input type='text' name='objet' id='objet' placeholder='objet de votre sujet' required aria-required="true" maxlength='200'>
                                    </div>							 
                                    <div>
                                        <label for="message">Message : </label>
                                        <textarea name="avis" id="message" col="50" row="30" placeholder="Votre message ..."></textarea>
                                    </div>
                                    <div class="boutton">
                                        <input type='submit' name='valider' value='Valider et confirmer'>
                                    </div>						
				</form>
                            <?php
                                error_reporting(E_ALL);
                                if(!empty($_POST))
                                {
                                    $retour=1;
                                foreach($_POST as $cle=>$val)
                                {
                                    if(empty($val))
                                {
                                    echo 'Le champ ',$cle,' est obligatoire.<br />';
                                    $retour=0;
                                }
                                }
                                if($retour==0)
                                {
                                echo '<a href="javascript:history.go(-1);">Corriger ou complètez les champs erronés !</a>';
                                }
                                else
                                {
                                echo '<section><p>Votre inscription à bien été enregistrer!</p>
                                        <P><a href="../../index.php">Cliquer ici </a> pour revenir sur la page d\'acceuil</p></section>';
                                }
                                }
                            ?>
                            <?php
                                $mail = @htmlentities($_POST['mail']);
				$to = 'joel.sylvius18@gmail.com';
				$objet = @htmlentities($_POST['objet']);
				$message = @htmlentities($_POST['avis']);
				$headers = 'From: '.$mail.'' . "\r\n" .
						'Reply-To: ' . "\r\n" .
						'X-Mailer: PHP/' . phpversion();
				mail($to, $objet, $message, $headers);
                            ?>
			</div>
		</section>
		<footer>
			<p>© Copyright 2015 - Lemoinscherdefrance.com - <a href="#" onclick="javascript:open_infos();">Mentions Légales</a> - <a href="#">Plan du site</a></p>
		</footer>
	</body>
</html>