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
<center>
   <table >
<tr>
<form action="ajax_fiche.php" method="POST" onchange="this.form.submit();" >
                    <td class="text-leftd"> Mois: 
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
                    </form>
                    </tr>
            </table> 
                     <table class="table table-striped">

                    
                    <tr class="danger">
                    <th class="text-left">Nom </th>
                    <th class="text-left">Prenom</th>
                    <th class="text-left">Somme versée</th>
                    <th class="text-left">Arrieré</th>
                    <th class="text-left">Dépenses</th>
                    <th class="text-left">Mois</th>
                    </tr>
                   
                    
                    <?php
                    $query = "SELECT * FROM fiche_locataire ";
                    $reponse=mysql_query($query);
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
                            </table></br>
                            </div>
</body>
</html>