<?php 
session_start();
  // header de page
    include"include/header.php";
    include 'fonctions.php';
    include 'cnx/cnx_bdd.php';

    $mois = $_POST['search_mois'];
?>

    <div id='section'>
    <div class="logged">
              <?php
            connectionOK();
            ?> </div>
<div class="content">
        <table class="table table-hover">  
                    <thead>
                    <tr class="danger">
                    <th class="text-left">Nom </th>
                    <th class="text-left">Prenom</th>
                    <th class="text-left">Total impayé</th>
                    </tr>
                    </thead>
                    <tbody >
            <?php
$query = "SELECT nom, prenom,SUM(arriere) AS arriere FROM fiche_locataire GROUP BY nom";
$reponse=mysql_query($query);
                    //$reponse = $base->query('SELECT * FROM fiche_locataire');
                     //echo "string";
                    while ($donnees  = mysql_fetch_array($reponse))

                    { 
                        ?>
                <tr>
                        <td class="text-left"> <input type="hidden" name="nom" value="<?php echo $donnees['nom'];?>"/><?php echo $donnees['nom']; ?></td>
                        <td class="text-left"> <input type="hidden" name="prenom" value="<?php echo $donnees['prenom'];?>"/><?php echo $donnees['prenom']; ?></td>
                        <td class="warning"> <input type="hidden" name="arriere" value="<?php echo $donnees['arriere'];?>"/><?php echo $donnees['arriere']; ?></td>
                </tr>
                   <?php
                    }
                    ?>
                    </tbody>
                    </table>
                    </div>
<?php
    include 'include/footer.php';
?>