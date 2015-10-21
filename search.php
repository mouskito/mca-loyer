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
<?php
 
// requête SQL qui compte le nombre total d'enregistrement dans la table et qui
//récupère tous les enregistrements
$query = "SELECT DISTINCT * FROM fiche_locataire WHERE nom like '$nom'";
$reponse=mysql_query($query);

$total = mysql_num_rows($reponse);

// si on a récupéré un résultat on l'affiche.
if($total) {

    // debut du tableau
?>

 <table class="table-fill">

                    <thead>
                    <tr>
                    <th class="text-left">Nom </th>
                    <th class="text-left">Prenom</th>
                    <th class="text-left">Somme versée</th>
                    <th class="text-left">Arrieré</th>
                    <th class="text-left">Dépenses</th>
                    <th class="text-left">Mois</th>
                    </tr>
                    </thead>
                    <tbody class="table-hover">
                    
 <?php
$query = "SELECT * FROM fiche_locataire WHERE nom like '$nom'";

$reponse=mysql_query($query);
                    //$reponse = $base->query('SELECT * FROM fiche_locataire');
                     //echo "string";
                    while ($donnees  = mysql_fetch_array($reponse))

                    { ?>
                <tr>
                        <td class="text-left"> <input type="hidden" name="nom" value="<?php echo $donnees['nom'];?>"/><?php echo $donnees['nom']; ?></td>
                        <td class="text-left"> <input type="hidden" name="prenom" value="<?php echo $donnees['prenom'];?>"/><?php echo $donnees['prenom']; ?></td>
                        <td class="text-left"> <input type="hidden" name="versement" value="<?php echo $donnees['versement'];?>"/><?php echo $donnees['versement']; ?></td>
                              <!-- <td class="text-left"> <?php echo $donnees['arriere']; ?></td> -->
                              <td class="text-left"> <input type="hidden" name="arriere" value="<?php echo $donnees['arriere'];?>"/><?php echo $donnees['arriere']; ?></td>
                              <td class="text-left"> <input type="hidden" name="depense" value="<?php echo $donnees['depense'];?>"/><?php echo $donnees['depense']; ?></td>
                              <td class="text-left"> <input type="hidden" name="mois" value="<?php echo $donnees['mois'];?>"/><?php echo $donnees['mois']; ?></td>
                </tr>
                   <?php
                    }
                    ?>
                    </tbody>
                    </table></br></br></br>
                    <table>
                        
                    </table>
                    <?php

    // fin du tableau.

}

else echo 'Pas d\'enregistrements dans cette table...';

}
        else {?>
        <blockquote id="style1">Vous devez connecter pour acceder à l'appli.</blockquote> 
          
         <?php }
 
// on libère le résultat

mysql_free_result($result); 
 echo"$t4<hr/>\n$t3</div>\n";
?>