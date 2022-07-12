<footer class="footer mt-auto py-3 bg-dark">
      <div class="vv-container">
        <span class="text-muted">
          <div class="vv-container my-5 py-5">
            <div class="row">
          <?php   
            if (isset($_SESSION['jujupseudo']))
{?>
    <div class="col order-first">
             <a href=""> <h4>COMMANDE
              </h4></a> 
              </div>
             <div class="col ">
              <a href="index.php?p=deco"><h4>DECONNECTION</h4></a>
             </div>
             <?php
}            
else
{
?>

            <div class="col order-first">
               <a href="connexion.php"><h4>Connexion
              </h4></a>
              </div>
             <div class="col ">
             <a href="index.php?p=insc"><h4>Inscription</h4></a>
             </div>
             <?php
            
}
?>

           







             <div class="col order-last">
              <h4>Nous contacter</h4>
             </div>
                  </div>
                  </div>
                  </div>
        </span>
      </div>
    </footer>