 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js">
 </script> <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  <script> $(document).ready(function() { $("#date").datepicker(); }); </script> 

<script type="text/javascript">
    var trueInput = document.querySelector("#FakeInput input"),
    fakeInput = document.querySelector("#FakeInput span:first-child");

trueInput.addEventListener("change", function(){
    fakeInput.innerHTML = trueInput.value;
}, false);
</script>

<?php include"inc/functions.php";
include"inc/opener-norc.php";
include"./inc/header.php";
include"./inc/nav.php";
?>
<style type="text/css">
    form {
 padding:10px;
 width:280px;
 }
#section fieldset {
 padding:0 20px 20px 20px;
 margin-bottom:10px;
 border:1px solid #DF3F3F;
 width: 300%;
 margin-left: 180%;
 }
legend {
 color:#DF3F3F;
 font-weight:bold
 }
label {
 margin-top:10px;
 display:block;
 }
label.inline {
 display:inline;
 margin-right:90px;
 }
input, textarea, select, option {
 background-color:#FFF3F3;
 }
input, textarea, select {
 padding:3px;
 border:1px solid #F5C5C5;
 border-radius:5px;
 width:97%;
 box-shadow:1px 1px 2px #C0C0C0 inset;
 }
select {
 margin-top:10px;
 }
input[type=radio] {
 background-color:transparent;
 border:none;
 width:10px;
 }
input[type=submit], input[type=reset] {
 width:100px;
 margin-left:5px;
 box-shadow:1px 1px 1px #D83F3D;
 cursor:pointer;
 margin-left: 25%;
 }
 }

</style>
<center><a href="saisie_depense.php">Saisir une depense ? </a></center>
        <hr/>

            <div id="section">
           <form action="toto.php" method="post" >

<fieldset>
 <legend> Saisir les dépenses : </legend>
   <p>Savez-vous ce que veut dire CSS ? : </p>
     <input type="radio" name="CSS" value="oui" id="oui"
     checked="checked" />
     <label for="oui" class="inline">oui</label>
     <input type="radio" name="CSS" value="non" id="non" />
     <label for="non" class="inline">non</label>
     
  <label for="utilise">Précisez la nature de la dépense: </label>
  <div class="ie1em"></div>
   <select name="utilise" id="utilise">
   <option value="toujours"> Frais d'agence </option>
   <option value="parfois"> Remboursement </option>
   <option value="jamais"> Travaux </option>
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

 

</form>


        </div>

        <hr/>
<?php include"inc/ender.php"?>