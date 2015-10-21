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

$_SESSION['nom'] = $_POST['nom'];
$_SESSION['prenom'] = $_POST['prenom'];
$_SESSION['pseudo'] = $_POST['pseudo'];
$_SESSION['modpass'] = $_POST['modpass'];

// Inscription 
// $nom=$_SESSION['nom'];
// $prenom=$_SESSION['prenom'];
// $mail=$_SESSION['email'];
$pseudo=$_SESSION['pseudo'];
$modpass=$_SESSION['modpass'];
// $modpass2=$_SESSION['confirm_pass'];

// On vérifie si les champs sont vides
// if(empty($nom) OR empty($prenom))
//     {
//     echo '<font color="red">Attention, seul le champs <b>ICQ</b> peut rester vide !</font>';
//     die();
//     } 


    //Connection   

if ($_SESSION['pseudo'] && $_SESSION['modpass'] != "") {

$sql2 = "SELECT id FROM user WHERE pseudo='$pseudo' AND password='$modpass'";

$req = mysql_query($sql2) or die('Erreur SQL !'.$sql2.'<br>'.mysql_error()); 
$res= mysql_num_rows($req);
if($res!=0)  // le pseudo  existe déjà, on redirige vers la page d'accueil
    {
       header('location: accueil.php');  
    } 
    else
      header('location: index.php');

}


// if (isset($_SESSION['nom']) && isset($_SESSION['prenom']) ) {
// 		// on regarde dans la table SITES_TBL si l'url existe déjà
// $sql2 = "SELECT id FROM user WHERE pseudo='$pseudo'";
// $req = mysql_query($sql2) or die('Erreur SQL !'.$sql2.'<br>'.mysql_error()); 
// $res= mysql_num_rows($req);

// if($res!=0)  // l'url existe déjà, on affiche un message d'erreur
//     {
//     echo '<font color="red">Désolé, mais cette URL existe déjà dans notre base.</font>';
//     } 
//     else{
// 	$sql = " INSERT INTO user (id,mail,nom,prenom,pseudo,password) VALUES ('','$mail','$nom','$prenom','$pseudo','$modpass') ";
//  // on insère les informations du formulaire dans la table
//     mysql_query($sql) or die('Erreur SQL !'.$sql.'<br>'.mysql_error());
// }
 
//     mysql_close();  // on ferme la connexion
//     }

    //Fin Inscription
?>