<?php
    $db_user="root";
    $db_password="";
    $db_name="registration";

$con=new PDO('mysql:host=localhost; db_name=' . $db_name . '; charset=utf8', $db_user, $db_password);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
?>
