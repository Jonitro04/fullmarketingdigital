<?php
ini_set('display_errors',1);
    error_reporting(E_ALL);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
define('ROOT_PATH',dirname(__FILE__).'/../');

function add($fileName) {
    
        include_once ROOT_PATH.'inc'.DIRECTORY_SEPARATOR.$fileName.'.php';
}
