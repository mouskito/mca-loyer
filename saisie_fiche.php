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
<center>
   <table class="table table-striped">
<tr>
<form action="traitement.php" method="POST">
                    <td class="text-left"> Mois: 
                     <select name="options">
                      <option value="janvier"> Janvier</option>
                      <option value="fevrier"> Février</option>
                      <option value="mars"> Mars</option>
                      <option value="avril"> Avril</option>
                      <option value="mai"> Mai</option>
                      <option value="juin"> Juin</option>
                      <option value="juillet"> Juillet</option>
                      <option value="aout"> Aout</option>
                       <option value="spetembre"> Septembre</option>
                      <option value="octobre"> Octobre</option>
                      <option value="novembre"> Novembre</option><option value="decembre"> Dècembre</option>
                    </select> </td>

          
                    <td class="text-left">Nom de l'agent</td>
                    <td class="text-left"><input type="text" name="agent" size="20" 
                maxlength="40"  placeholder="Entrez le nom de l'agent" /></td>
                    </tr>
</table> 
</center>


                    <table class="table table-striped">

                    <thead>
                    <tr class="danger">
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
$query = "SELECT * FROM fiche_locataire";
$reponse=mysql_query($query);
                    //$reponse = $base->query('SELECT * FROM fiche_locataire');
                     //echo "string";
                    while ($donnees  = mysql_fetch_array($reponse))

                    { ?>
                <tr>
                        <td class="text-left"> <input type="hidden" name="nom" value="<?php echo $donnees['nom'];?>"/><?php echo $donnees['nom']; ?></td>
                        <td class="text-left"> <input type="hidden" name="prenom" value="<?php echo $donnees['prenom'];?>"/><?php echo $donnees['prenom']; ?></td>
                              <td class="text-left"> <input type="int" name="versement" size="20" placeholder="loyer mensuel" /></td>
                              <!-- <td class="text-left"> <?php echo $donnees['arriere']; ?></td> -->
                              <td class="text-left"> <input type="int" name="versement" size="20" placeholder="Les arrièrès" /></td>
                              <td class="text-left"> <input type="int" name="versement" size="20" placeholder="Dépense" /></td>
                </tr>
                   <?php
                    }
                    ?>
                    </tbody>
                    </table></br>
                  
                    <tr>
                        <TEXTAREA name="adresse" rows="6" cols="50"> </TEXTAREA>
                        </tr>
                   <input type="submit" value="envoyer">
                        <input type="reset" value="Effacer">
                </form>
          </div>
<?php
    include 'include/footer.php';
?>
</tr></table></center></div></div>
</body>
</html>