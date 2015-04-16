<?php
ini_set('display_errors',1);
    error_reporting(E_ALL);

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$pdo = new PDO('mysql:host=db572516769.db.1and1.com;dbname=db572516769', 'dbo572516769','Cm594900', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
var_dump($pdo);

//if($mysqli->connect_error)
//{
//	die ("Un problème est survenu lors de la tentative de connexion à la BDD : ".$mysqli->error);
//} 
