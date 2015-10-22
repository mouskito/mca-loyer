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
echo "string";
die($pseudo);
?>

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


