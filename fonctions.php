<?php
//include "connect.php";
//  function check_login () {
// if ($_SESSION['pseudo'] && $_SESSION['modpass'] != "") {

// $sql2 = "SELECT id FROM user WHERE pseudo='$pseudo' AND password='$modpass'";

// $req = mysql_query($sql2) or die('Erreur SQL !'.$sql2.'<br>'.mysql_error()); 
// $res= mysql_num_rows($req);
// if($res!=0)  // le pseudo  existe déjà, on redirige vers la page d'accueil
//     {
//        header('location: accueil.php');  
//     } 
//     else
//       header('location: index.php');

// }
    
// }


//die($error);
function connectionOK(){
$erreur = "<div id='log'><a href='index.php'> Connecte toi </a> ou";
$erreur .= "<a href='inscription.php'> Crée ton compte </a></div><hr/><hr/>";
$erreur .= "<div class='error'><div id='img_err'><img src='img/oups2.gif'></div>";
$erreur .= " <div id='mgs_err'> <blockquote id='style1'>Cette appli releve du domaine du privè. <br>";
$erreur .= "alors tu degage !!! <br>";
$erreur .= "<br>Pour plus de details, veuillez contacter l'administrateur.";
$erreur .= "</blockquote> </div></div> ";

    if (isset($_SESSION['pseudo']) && isset($_SESSION['modpass'])  != "" ) {
                //if (check_login ()) {
         
            echo " <div id='log'>Bonjour ".$_SESSION['pseudo']. "| <a href='logout.php'>Déconnexion</a></div><hr/><hr/>"; 
                include 'include/nav.php'; }
                else
                    die($erreur) ;
        
}

// Déconnexion automatique au bout de 30 minutes d'inactivité
function sessionExpire() {
  if (isset($_SESSION['countdown']) && (time() - $_SESSION['countdown'] > 1800)) {
    // 1800 secondes = 30 minutes
    session_destroy();
    session_unset();
    header("location:" . URL_APPLI . "index.php?timeout");
  }
  $_SESSION['countdown'] = time();
}

function isAdmin() {
	if($_SESSION['statut'] == "ADM") return TRUE;
	return FALSE;
}

function isAdminDir() {
	if($_SESSION['statut'] == "DIR") return TRUE;
	return FALSE;
}

//MCA 06/12/13
function isAdminEta() {
	if($_SESSION['statut'] == "MAG") return TRUE;
	return FALSE;
}


function isRoot() {
	if($_SESSION['statut'] == "ADM") return TRUE;
	return FALSE;
}


?>