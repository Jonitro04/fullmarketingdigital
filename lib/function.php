<?php
session_start();

include  'BDConnect.php';

define('ROOT_PATH',dirname(__FILE__).'/../');

function add($fileName) {
    
        include_once ROOT_PATH.'inc'.DIRECTORY_SEPARATOR.$fileName.'.php';
}
 

function isuser(){
    
    if(isset($_SESSION['user']['satatus']) && !empty($_SESSION['user']['satatus']) && $_SESSION['user']['satatus'] == 0)
        return TRUE;
    
}

function userIsAdmin(){
    if(isset($_SESSION['user']['satatus']) && !empty($_SESSION['user']['satatus']) && $_SESSION['user']['satatus'] == 1)
        return TRUE;
}

function userIsSuperAdmin(){
    if(isset($_SESSION['user']['satatus']) && !empty($_SESSION['user']['satatus']) && $_SESSION['user']['satatus'] == 2)
        return TRUE;
    
}

print_r($_POST['email']);

print '<pre>'; print_r(get_class_methods($pdo)); print '</pre>';

$result = $pdo->query("SELECT * FROM user");

$a = $result->fetchALL(PDO::FETCH_ASSOC);

//print_r($a);