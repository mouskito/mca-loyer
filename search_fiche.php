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
                <?php
            if (isset($_SESSION['pseudo']) && isset($_SESSION['modpass'])  != "" ) {
            //  if (check_login()) {
               
               include 'include/nav.php'; ?>
<center>
   <table >
<tr>
<form action="search.php" method="POST" onchange="this.form.submit();" >
<td>
                   <label for="pays">Choisir un mois</label>
                     <select name="mois">
                     <option value="" > </option>
                      <option value="janvier" > Janvier</option>
                      <option value="fevrier"> Février</option>
                      <option value="mars"> Mars</option>
                      <option value="avril"> Avril</option>
                      <option value="mai"> Mai</option>
                      <option value="juin"> Juin</option>
                      <option value="juillet"> Juillet</option>
                      <option value="aout"> Aout</option>
                       <option value="spetembre"> Septembre</option>
                      <option value="octobre"> Octobre</option>
                      <option value="novembre"> Novembre</option>
                      <option value="decembre"> Dècembre</option>
                    </select> </td>
                    <td><label for="pays">Saisir nom du locataire</label>
                    <select name="search" onchange="this.form.submit();" >
                    <option value="" > </option>
                    <?php

                    $query = "SELECT * FROM fiche_locataire";
                    $reponse=mysql_query($query);
                    //$reponse = $base->query('SELECT * FROM fiche_locataire');
                     //echo "string";
                    while ($donnees  = mysql_fetch_array($reponse))

                    { ?>  
                <option value="<?php echo $donnees['nom'];?>"> <?php echo $donnees['nom']; ?></option>
                    
                     <?php
                    }
                    ?>
                    </select></td>
                    </tr>
</form>
</table> 
</center>
<?php }
        else {?>
        <blockquote id="style1">Vous devez connecter pour acceder à l'appli.</blockquote> 
          
         <?php }?>
</body>
</html>