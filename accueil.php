<?php 
session_start();
  // header de page
    include"include/header.php";
    include 'fonctions.php';
    //accesDenied();
?>


    <div id='section'>
    <div class="logged">
        <div id="log">
              <?php
            connectionOK();
            ?>
            </div>
          
          </div>
    

<?php
    include 'include/footer.php';
?>


