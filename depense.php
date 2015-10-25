
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
                  <a href="saisie_depense.php">Saisir une depense ? </a></center>
                          <hr/>

                              <div id="section">
                             <form action="toto.php" method="post" >

                  <fieldset>
                   <legend> Saisir les dépenses : </legend>
                     
                       
                    <label for="utilise">Précisez la nature de la dépense: </label>
                    <div class="ie1em"></div>
                     <select name="utilise" id="utilise">
                     <option value="remboursement">Remboursement</option>
                     
                     <option value="travaux"> Travaux </option><option value="divers">  Divers</option>
                     </select><div class="ie1em"></div>
                      <label for="montant">Montant de la facture:</label>
                     <input type="int" placeholder="montant" name="montant"  id="montant" />
                     <div class="ie1em"></div>
                     <label for="date">La date:</label>
                     
                     <input type="date" name="date"  id="date" /><div class="ie1em"></div>
                     <label for="facture  ">Joindre facture :</label>
                     <input type="file" name="facture" size="20" 
                     maxlength="40" value="facture" id="facture FakeInput" />
                  <div class="ie1em"></div>
                  </fieldset>

                  <fieldset>
                   <legend>Vos coordonnées :</legend>
                    <label for="nom">Votre nom:</label>
                     <input type="nom" name="nom" size="20" 
                     maxlength="40" placeholder="nom" id="nom" /><div class="ie1em"></div>
                     <label for="email">Votre email :</label>
                     <input type="email" name="email" size="20" 
                     maxlength="40" placeholder="email" id="email" />
                  <div class="ie1em"></div>
                    <label for="comments">Vos commentaires :</label>
                     <textarea name="comments" id="comments" cols="50" rows="5">
                     </textarea>
                     <div class="ie1em"></div>
                    <input type="submit" value="Envoyer" />
                   <input type="reset" value="Annuler" />

                  </fieldset>
                  </form></div></div>


         <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js">
 </script> <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  <script> $(document).ready(function() { $("#date").datepicker(); }); </script> 