
<?php 
       // connection à la DB
include"inc/functions.php";
include"connect.php";
    include"inc/opener-norc.php";
    // header de page
        include"inc/header.php";
        include"inc/nav.php";
    // en-tête du contenu
  $mois = $_POST['mois'];      
        echo"<div id='section'>\n";
        echo contentTitle("Résultat  fiche de locataire !");
        echo contentTitle("Bilan du mois de <b> $mois </b>");
        // contenu
    // fin du contenu
        echo"$t4<hr/>\n$t3</div>\n";
// fin de page 
?>

<center>
   <table >
<tr>
<form action="ajax_fiche.php" method="POST" iid="ajax" onchange="this.form.submit();" >
                    <td class="text-left"> Mois: 
                   <!--   <select name='mois' >
        
          <
            $res = mysql_query("SELECT  * FROM fiche_locataire ");
            while($row = mysql_fetch_array($res)){
              echo "<option value='".$row["mois"]."'>".$row["mois"]."</option>";
            }
          ?>
        </select> -->
        <SELECT name="mois" id="ajax" onchange="this.form.submit();" >
                      <option value=""> </option>
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
    </SELECT>
         </td>
                    <td class="text-left">Nom de l'agent</td>
                    <td class="text-left"><input type="text" name="agent" size="20" 
   maxlength="40"  placeholder="Entrez le nom de l'agent" /></td>
                    </tr>
                    </form>
</table> 
</center>

<?php
 
// requête SQL qui compte le nombre total d'enregistrement dans la table et qui
//récupère tous les enregistrements
$query = "SELECT DISTINCT * FROM fiche_locataire WHERE mois like '$mois'";
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
                        <td class="text-left"> <input type="hidden" name="versement" value="<?php echo $donnees['versement'];?>"/><?php echo $donnees['versement']; ?></td>
                              <!-- <td class="text-left"> <?php echo $donnees['arriere']; ?></td> -->
                              <td class="text-left"> <input type="hidden" name="arriere" value="<?php echo $donnees['arriere'];?>"/><?php echo $donnees['arriere']; ?></td>
                              <td class="text-left"> <input type="hidden" name="depense" value="<?php echo $donnees['depense'];?>"/><?php echo $donnees['depense']; ?></td>
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

 
// on libère le résultat

mysql_free_result($result); 

?>