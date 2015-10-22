<?php 
session_start();
//include "fonctions.php";
include"include/header.php";
  /*  include"include/nav.php";*/
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
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Style -->
    <link href="css/font.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="js/jquery.js"></script>
    <script type='text/javascript' >
  

      function couleur(obj) {
           obj.style.backgroundColor = "#FFFFFF";
      }
      function verif_formulaire()
      {
         if(document.formulaire.pseudo.value == ""   )  {
           alert("Attention un des champs doit etre rempli \n\n - Pseudo \n  ");
           document.formulaire.pseudo.focus();
           document.formulaire.pseudo.style.backgroundColor = "#F3C200";
           //document.formulaire.password.style.backgroundColor = "#F3C200";
           
           return false;
          }
         
         if(document.formulaire.modpass.value == ""   )  {
         alert("Attention un des champs doit etre rempli \n\n - Mot de passe \n  ");
         document.formulaire.modpass.focus();
         document.formulaire.modpass.style.backgroundColor = "#F3C200";
         //document.formulaire.password.style.backgroundColor = "#F3C200";
          return false;
        }
                      
      }
      </script>
  </head>
  <body>
    
      <div id="bloc">
        <form name="formulaire" method="post" action="connect.php" enctype="multipart/form-data" onSubmit="return verif_formulaire();">
          
          <h6>"Veuillez saisir votre identifiant et votre mot de passe pour vous authentifier." </h6>
          <div></div>
          <div id="new">
            <label for="pseudo">Identifiant : </label><input id="pseudo" name="pseudo" type="text" onKeyUp="javascript:couleur(this);">
            <div class="ie1em"></div>
            <label for="modpass">Mot de passe : </label><input id="modpass" name="modpass" type="password" onKeyUp="javascript:couleur(this);">
          </div>
          <div id="btns">
          <input type="submit" value="Se connecter">
            <input type="reset" value="Effacer">
          </div>
          <h6><a href="inscription.php">" Crée ton compte " </a> </h6>
        </form>
      </div>
    </div>
    <hr/>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
</html>

