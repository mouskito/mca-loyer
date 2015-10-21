<?php 
include"inc/functions.php";
include"connect.php";
    $page_title="Les impayés";
    include"inc/opener-norc.php";
    // header de page
        include"inc/header.php";
         include"inc/nav.php";
        //include"inc/nav.php";
    // en-tête du contenu
        echo"<div id='section'>\n";
        echo contentTitle("Liste des locataires qui ont des arriérés "); ?> 
<hr>
<?php
setlocale(LC_TIME, 'fra_fra');
$date = date("d-M-Y");
echo contentTitle(" Total arriéré/locataire au : ".$date);
 ?>

        <div id='section'>
        <table class="table-fill">
                    <thead>
                    <tr>
                    <th class="text-left">Nom </th>
                    <th class="text-left">Prenom</th>
                    <th class="text-left">Total impayé</th>
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
                        <td class="text-left"> <input type="hidden" name="arriere" value="<?php echo $donnees['arriere'];?>"/><?php echo $donnees['arriere']; ?></td>
                </tr>
                   <?php
                    }
                    ?>
                    </tbody>
                    </table></br></br></br>
        </div>
        <hr/>

<?php
    include"inc/ender.php";



    
    //Connection   

if (isset($_POST['pseudo']) && isset($_POST['modpass']) ) {

$sql2 = "SELECT id FROM user WHERE pseudo='$pseudo' AND password='$modpass'";
$req = mysql_query($sql2) or die('Erreur SQL !'.$sql2.'<br>'.mysql_error()); 
$res= mysql_num_rows($req);
if($res!=0)  // le pseudo  existe déjà, on redirige vers la page d'accueil
    {
         header('Location: accueil.php');  
    } 
    else
        header('Location: index.php');

}
?>
