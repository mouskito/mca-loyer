<?php 
// session_start();
// if(!isset($_SESSION['permis'])||$_SESSION['permis']!='²º¹³·ª·¹'){
// 	if(sessionExist('login')){redir('quizz.php');
// 	}elseif(sessionExist('staff')){unset($_SESSION['staff']);setcookie('staff');$_SESSION['permis']='²º¹³·ª·¹';
// 	}else{redir('nouveau.php');}
// }

//include"inc/functions.php";
//include"inc/opener-norc.php";
	// header de page
		include"include/header.php";
		
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Loyer - Inscription</title>
<script src="js/jquery.js"></script>
<script type='text/javascript' >
	

function couleur(obj) {
     obj.style.backgroundColor = "#FFFFFF";
}
function verif_formulaire()
{
 
   if(document.formulaire.password.value == ""   )  {
   alert("Attention un des champs doit etre rempli \n\n - Mot de passe \n  ");
   document.formulaire.password.focus();
   document.formulaire.password.style.backgroundColor = "#F3C200";
   //document.formulaire.password.style.backgroundColor = "#F3C200";
   
   return false;
  }
  
   adresse = document.formulaire.mail.value;
   var place = adresse.indexOf("@");
	var point = adresse.indexOf(".",place+1);
	if ((place > -1)&&(adresse.length >2)&&(point > 1))
		{
		
		return(true);
		}
	else
		{
		alert('Entrez une adresse e-mail valide!!');
		 document.formulaire.mail.style.backgroundColor = "#F3C200";
		return(false);
		}
 
 
	
}
</script>

<script language="JavaScript">

function couleur(obj) {
     obj.style.backgroundColor = "#FFFFFF";
}
function verif()
{

	die('xfdssdf');
 if(document.formul.nom.value == "" )  {
   alert("Attention un des champs doit etre rempli \n\n - Nom \n   ");
   document.formul.nom.focus();
   document.formul.nom.style.backgroundColor = "#F3C200";
   //document.formulaire.password.style.backgroundColor = "#F3C200";
   
   return false;
  }
 
 if(document.formul.prenom.value == "" )  {
   alert("Attention un des champs doit etre rempli \n\n - Prenom \n   ");
   document.formul.prenom.focus();
   document.formul.prenom.style.backgroundColor = "#F3C200";
   //document.formulaire.password.style.backgroundColor = "#F3C200";
   
   return false;
  }
  
  adresse = document.formul.email.value;
   var place = adresse.indexOf("@",1);
	var point = adresse.indexOf(".",place+1);
	if ((place > -1)&&(adresse.length >2)&&(point > 1))
		{
		
		return true;
		}
	else
		{
		alert('Entrez une adresse e-mail valide!!');
		 document.formul.email.style.backgroundColor = "#F3C200";
		return false;
		}




 if(document.formul.pseudo.value == "" )  {
   alert("Attention un des champs doit etre rempli \n\n - Pseudo \n   ");
   document.formul.pseudo.focus();
   document.formul.pseudo.style.backgroundColor = "#F3C200";
   //document.formulaire.password.style.backgroundColor = "#F3C200";
   
   return false;
  }
}
</script>

</head>
  <body>

		<!-- <form name="formul" method="post" action="connect.php" enctype="multipart/form-data" onSubmit="return verif();">
				
			<div id='section'>
				<div id="bloc">
					<div></div>
					<div id="new">
						<label for="nom">Nom : </label><input id="nom" name="nom" type="text" onKeyUp="javascript:couleur(this);" >
						<div class="ie1em"></div>
						<label for="prenom">Prénom : </label><input id="prenom" name="prenom" type="text" onKeyUp="javascript:couleur(this);" >
					
						<label for="email">Adresse e-Mail : </label><input id="email" name="email" type="text" onKeyUp="javascript:couleur(this);" >
					
						<label for="pseudo">Identifiant : </label><input id="pseudo" name="pseudo" type="text" onKeyUp="javascript:couleur(this);" >
						<div class="ie1em"></div>
						<label for="modpass">Mot de passe : </label><input id="modpass" name="modpass" type="password" onKeyUp="javascript:couleur(this);" >

						<label for="modpass">Confirmer mot de passe : </label><input id="confirm_pass" name="confirm_pass" type="password" onKeyUp="javascript:couleur(this);" >
					
				</div>
				<div id="btns"><input type="submit" value="Se connecter">
						<input type="reset" value="Effacer">
					</div>
			</div>
		</form> -->
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
         
		<hr/>
	</body>
</html>
