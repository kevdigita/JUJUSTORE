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
  <a href="index.php?p=insc">
  <button class="btn btn-order btn-lg me-5 merriweather">COMMANDES</button></a>
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
    <section class="cc-carousel merriweather bg-dark text-light text-center py-5">
      <div class="container">
        <div class="row">
          <h1 class="text-uppercase">Nos conseils</h1>
          <div class="col pb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi sed, soluta dignissimos consequuntur nesciunt placeat.</div>
        </div>
        <div id="myCarousel" class="carousel slide py-5 " data-bs-ride="carousel">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner ">
            <div class="carousel-item active">
              <img src="assets/img/woman-1246488_960_720.jpg" class="card-img-top  " alt="...">
      
              <div class="container">
                <div class="carousel-caption text-start merriweather">
                  <h3>Découvrez nos nouveautés</h3>
                  <p>De nouveaux produits cosmétiques sont disponibles pour vous!</p>
                
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img src="assets/img/black-femme.jpg" class="card-img-top " alt="..."><rect width="100%" height="100%" fill="#777"/>
      
              <div class="container">
                <div class="carousel-caption text-dark merriweather">
                  <h3>Nos conseils</h3>
                  <p>Besoin de conseils de peau ? Consultez notre page conseils!</p>
                  
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img src="assets/img/hands-1327811_960_720.jpg" class="card-img-top  " alt="..."><rect width="100%" height="100%" fill="#777"/>
      
              <div class="container">
                <div class="carousel-caption text-end text-dark merriweather">
                  <h3>Echangeons</h3>
                  <p>Partagez vos expériences avec les autres internautes!</p>
                  
                 
                </div>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>

    </section>
  