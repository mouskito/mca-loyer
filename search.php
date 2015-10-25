<?php 
session_start();
  // header de page
    include"include/header.php";
    include 'fonctions.php';
    include 'cnx/cnx_bdd.php';

      $mois = $_POST['mois']; 
    $nom = $_POST['search']; 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Loyer - Accueil</title>    
</head>
  <body> 
  <div id='section'>
    <div class="logged">
              <?php
            connectionOK();
            ?> </div>

<div class="content">
               <table>
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
                            <option value="<?php echo $donnees['nom'];?>"> <?php echo $donnees['prenom']." " .$donnees['nom'];; ?></option>
                                
                                 <?php
                                } ?>
                                </select></td>
                     </form>
                 </table> 
<?php
// requête SQL qui compte le nombre total d'enregistrement dans la table et qui
//récupère tous les enregistrements
$query = "SELECT DISTINCT * FROM fiche_locataire WHERE nom like '$nom'" ;
$reponse=mysql_query($query);

$total = mysql_num_rows($reponse);
// si on a récupéré un résultat on l'affiche.
if($total) {

    // debut du tableau
?>
<table class="table table-hover">  
                    <tr>
                    <th class="text-left">Nom </th>
                    <th class="text-left">Prenom</th>
                    <th class="text-left">Somme versée</th>
                    <th class="text-left">Arrieré</th>
                    <th class="text-left">Dépenses</th>
                    <th class="text-left">Mois</th> 
                    </tr>
                    
 <?php
//$query = "SELECT * FROM fiche_locataire WHERE nom like '$nom'";

//$reponse=mysql_query($query);
                    //$reponse = $base->query('SELECT * FROM fiche_locataire');
                     //echo "string";
                    while ($donnees  = mysql_fetch_array($reponse))

                    { ?>
                <tr class="info">
                        <td class="text-left"> <?php echo $donnees['nom']; ?></td>
                        <td class="text-left"> <?php echo $donnees['prenom']; ?></td>
                        <td class="text-left"> <?php echo $donnees['versement']; ?></td>
                            
                              <td class="text-left"><?php echo $donnees['arriere']; ?></td>
                              <td class="text-left"><?php echo $donnees['depense']; ?></td>
                              <td class="text-left"><?php echo $donnees['mois']; ?></td>
                             
                </tr>
                   <?php
                    }
                    ?>
                    </table></br>
                  
                    <?php

    // fin du tableau.

}

else echo 'Pas d\'enregistrements dans cette table...'; 
// on libère le résultat

mysql_free_result($result); 
?>
</div>
<?php
    include 'include/footer.php';
?>
