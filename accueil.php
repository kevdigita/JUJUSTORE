<section class="banner d-flex justify-content-center align-items-center pt-5">
      <div class="container my-5 py-5">
        <div class="row">
         <div class="col-md-6"></div>
         <div class="col-md-6">
           <h1 class='text-capitalize py-3 redressed banner-desc' >Lorem ipsum dolor <br/>
             sit amet consectetur adipisicing.
            </h1>
            <p>

            <?php
if(isset($_SESSION['jujupseudo']))
{
  ?>
  <a href="index.php?p=pan">
  <button class="btn btn-order btn-lg me-5 merriweather">PANIER</button></a>
  <a href="index.php?p=con"> <button class="btn btn-outline-info btn-lg merriweather">ACHATS</button></a>

  <?php
}
else
{
  ?>
              <a href="inscription.php">
              <button class="btn btn-order btn-lg me-5 merriweather">Inscription</button></a>
              <a href="connexion.php"> <button class="btn btn-outline-info btn-lg merriweather">Connexion</button></a>
           
              <?php
              }
              ?>
            </p>
         </div>
        </div>
      </div>
    </section>
    

    <section class="cc-menu py-5 merriweather ">
      <div class="container">
        <div class="row">
          <h3 class="text-center text-light merriweather">Nos nouveautés</h3>
          <div class="card bg-transparent text-center">
            <div class="card-header redressed fs-4">
            </div>
            <div class="card-body text-light">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              
            </div>
          </div>
        </div>
        
        <div class="row row-cols-1 row-cols-md-2 g-4">
          <?php

include_once 'admin/classproduits.php';
$pro=new produit;
$pro->categorievu("accueil");
?>
      </div>
      
    </section>
   