<?php 
session_start();
  // header de page
    include"include/header.php";
    include 'fonctions.php';
    include 'cnx/cnx_bdd.php';

      $mois = $_POST['search_mois']; 
    //$nom = $_POST['search']; 
?>
    <div id='section'>
    <div class="logged">
              <?php
            connectionOK();
            ?> </div>
<div class="content">
<center>
   <table >
<tr>
<form action="ajax_fiche.php" method="POST" iid="ajax" onchange="this.form.submit();" >
                    <td class="text-left"> Mois: 
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
                    </tr>
                    </form>
</table> 
</center>
<?php
 
// requête SQL qui compte le nombre total d'enregistrement dans la table et qui
//récupère tous les enregistrements
$query = "SELECT DISTINCT * FROM fiche_locataire WHERE mois = '$mois'";
$reponse=mysql_query($query);
$total = mysql_num_rows($reponse);


// si on a récupéré un résultat on l'affiche.

if($total) {

    // debut du tableau
?>

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

                    while ($donnees  = mysql_fetch_array($reponse))

                    { ?>
                <tr>
                        <td class="warning"> <?php echo $donnees['nom']; ?></td>
                        <td class="sucess"> <?php echo $donnees['prenom']; ?></td>
                              <td class="info"> <?php echo $donnees['versement']; ?></td>
                              <td class="text-left"> <?php echo $donnees['arriere']; ?></td> 
                              <td class="warning"> <?php echo $donnees['depense']; ?></td>
                              <td class="active"> <?php echo $donnees['mois']; ?></td>
                </tr>
                   <?php
                    }
                    ?>
                    </tbody>
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