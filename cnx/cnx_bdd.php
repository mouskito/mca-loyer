<?php
session_start();
$server="localhost";
$user="root";
$pass="root";
$base="facturation";

try{$data=new PDO("mysql:host=$server;dbname=$base",$user,$pass);}catch(Exception $err){
    die("<br/><br/><br/><p class='error-num'>Erreur de connexion à la base de données !<br/>
        Veuillez vérifier vos paramètres de configuration.<br/><br/>Détails de l'erreur :<br/><br/>".$err->getMessage());}
$con=mysql_connect($server,$user,$pass);mysql_select_db($base);

?>