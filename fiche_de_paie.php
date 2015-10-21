<?php include"inc/functions.php";
 include"connect.php";
    $page_title="Saisie Fiche";
    include"inc/opener-norc.php";
    // header de page
        include"inc/header.php";
        include"inc/nav.php";
    // en-tête du contenu
        echo"<div id='section'>\n";
        echo contentTitle("Saisie une fiche de locataire !");
        echo contentDesc("Cliquez sur Nouveau Recrutement pour sélectionner le questionnaire à soumettre.");
        // contenu
    // fin du contenu
        echo"$t4<hr/>\n$t3</div>\n";
// fin de page                
?>
<html>
<body>
<center>
   <table >
<tr>
<form action="ajax_fiche.php" method="POST" onchange="this.form.submit();" >
                    <td class="text-left"> Mois: 
                      <SELECT name="mois" id="ajax" onchange="this.form.submit();" >
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
</table> 
</center>


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
$query = "SELECT * FROM fiche_locataire ";
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
</body>
</html>