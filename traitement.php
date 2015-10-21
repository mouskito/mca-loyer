<?php include"inc/functions.php";
 include"connect.php";
// session_start();
// unset($_SESSION['staff']);setcookie('staff','',time()-320000000,'/');
// if(sessionExist('login')){redir("quizz.php");}
// en-tête de page
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


$mois = $_POST['mois'];
$nom = $_POST['nom'];
/*  --- Formulaire de recherche ----  */
if (isset($_POST['nom'])) {
    ?>

<html>
<body>
                    <table class="table-fill">
                    <thead>
                    <tr>
                    <th class="text-left">Nom </th>
                    <th class="text-left">Prenom</th>
                    <th class="text-left">Somme versée</th>
                    <th class="text-left">Arrieré</th>
                    <th class="text-left">Dépenses</th>
                    <th class="text-left"></th>
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
                    <td class="text-left">
                    <input type="hidden" name="comentaire" value="<?php echo $donnees['commentaire'];?>"/><?php echo $donnees['commentaire']; ?>
                              </td>
                </tr>
                   <?php
                    }
                    ?>
                    </tbody>
                    </table>
</boby>
</html>

<?php
}
else
    echo "Impossible";