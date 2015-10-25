<?php 
session_start();
  // header de page
    include"include/header.php";
    include 'fonctions.php';
    include 'cnx/cnx_bdd.php';
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

   <table >
<tr>
<form action="search.php" method="POST" onchange="this.form.submit();" >
<td>
                   <label for="pays">Choisir un mois</label>
                     
                    <select name="search_mois" onchange="this.form.submit();" >
                    <option value="" > </option>
                    <?php

                    $query = "SELECT DISTINCT mois FROM fiche_locataire";
                    $reponse=mysql_query($query);
                    while ($donnees  = mysql_fetch_array($reponse))

                    { ?>  
                         <option value="<?php echo $donnees['mois'];?>"> <?php echo $donnees['mois']; ?></option>
                    
                     <?php
                    }
                    ?>
                    </select></td>
                    

                    <td><label for="pays">Saisir nom du locataire</label>
                    <select name="search" onchange="this.form.submit();" >
                    <option value="" > </option>
                    <?php

                    $query = "SELECT * FROM fiche_locataire";
                    $reponse=mysql_query($query);
                    while ($donnees  = mysql_fetch_array($reponse))

                    { ?>  
                      <option value="<?php echo $donnees['nom'];?>"> <?php echo $donnees['nom']." " . $donnees['prenom']; ?></option>
                    
                     <?php
                    }
                    ?>
                    </select></td>
                   
</form> </tr>
</table> 
</div>
<?php
    include 'include/footer.php';
?>

</body></html>



