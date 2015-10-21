<?php 
session_start();
  // header de page
    include"include/header.php";
    include 'fonctions.php';
    //accesDenied();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Loyer - Accueil</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Style -->
    <link href="css/font.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">        
</head>
  <body>
    <div id='section'>
    <div class="logged">
        <div id="log">
              <?php
            if (isset($_SESSION['pseudo']) && isset($_SESSION['modpass'])  != "" ) {
                //if (check_login ()) {
         
            echo " Bonjour ".$_SESSION['pseudo']. "|"; ?>
                <a href="logout.php">Déconnection</a>
        </div><hr/><hr/>
              
                <?php
                include 'include/nav.php'; }
        else {?>
          <div id="log"><a href="index.php"> Connecte toi </a> ou
          <a href="inscription.php"> Crée ton compte </a></div><hr/><hr/>
            <div class="error">
        <div id="img_err">
             <img src="img/oups2.gif">
         </div>  
        <div id="mgs_err">
            <blockquote id="style1">Cette appli releve du domaine du privè. <br>
            Votre mission suivante est d'aller visiter 
            un par un les outils incontournables pour votre projet : jQuery, Modernizr, Bootstrap, etc. et d'installer 
            les nouvelles versions de ces outils… ou alors de mettre à jour vos propres modules les uns après les autres.

            Avouez que vous gagneriez du temps à ne plus vous soucier de ce genre de tâches répétitives quotidiennes.E
            h bien figurez-vous que ça tombe bien : tous les outils tels que jQuery, Modernizr ou Bootstrap sont des dépendances 
            que Bower va vous aider à installer en une ligne de code !
            <br>
                Pour plus de details, veuillez contacter l'administrateur.
            </blockquote> 
        </div>
          
        </div>
         <?php }?>
            </div>
          
          </div>
    </body>
</html>

<?php
    include 'include/footer.php';
?>


