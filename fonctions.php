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
	if($_SESSION['Statut'] == "ADM") return TRUE;
	return FALSE;
}

function isAdminDir() {
	if($_SESSION['Statut'] == "DIR") return TRUE;
	return FALSE;
}

//MCA 06/12/13
function isAdminEta() {
	if($_SESSION['Statut'] == "MAG") return TRUE;
	return FALSE;
}


function isRoot() {
	if($_SESSION['Statut'] == "ADM") return TRUE;
	return FALSE;
}


?>