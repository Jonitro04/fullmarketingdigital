<?php
ini_set('display_errors',1);
    error_reporting(E_ALL);   


$mysqli = new Mysqli('db571455915.db.1and1.com', 'dbo571455915', 'mc495900', 'db571455915'); // le @ devant le new permet d'éviter le message d'erreur généré par php afin de le gérer proprement.
// ATTENTION : on ne met le @ que si on utilise le IF qui suit : (pour gérer les erreurs proprement)
if($mysqli->connect_error)
{
	die ("Un problème est survenu lors de la tentative de connexion à la BDD : ".$mysqli->error);
}
?>