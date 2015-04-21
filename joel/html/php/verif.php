<?php 
if(isset($_POST["mail"])) 
{ 
$mail=$_POST["mail"]; 
include("./connect_bdd.php"); 
$req_exist="SELECT mail FROM user WHERE mail='".$mail."'"; 
$mail_exist=mysql_query($req_exist); 
if(mysql_num_rows($mail_exist)>0) 
{ 
echo "1"; 
} 
else 
{ 
echo "0"; 
} 
mysql_close(); 
} 
else 
{ 
echo "non non !"; 
} 
?> 