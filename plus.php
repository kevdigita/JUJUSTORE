<?php 
include_once 'admin/classproduits.php';
include_once 'admin/classcommande.php';






if(isset($_GET['id']) && !empty($_GET["id"]))
{
$pro=new produit;

$pro->voirplus($_GET['id']);

if(isset($_POST['submit']))
{
extract($_POST);
if(!empty($qte))
{
  if(isset( $_SESSION['jujupseudo']))  
  {
  $pro=new commande;

  $pro->commander($qte,$_GET['id']);
  ?>
  <script>

<?php $redirection="index.php?p=mescon"?>
            url="<?php echo $redirection;?>"
      
      setTimeout("window.location=url",0)
</script>
<?php
  
  }
  else
  {
    ?>
    <script>
  
  <?php $redirection="index.php"?>
              url="<?php echo $redirection;?>"
        
        setTimeout("window.location=url",0)
  </script>
  <?php
  

  }

}
else
{
  ?>  
  <div class="alert alert-dark text-danger">
  <button
  type="button"  data-dismiss="alert"
  aria-hidden="true">
 &times;
 </button>

   <h5> VEUILLEZ REMPLIR TOUT LES CHAMPS </h5>  </div>
 <?php


}
}
?>




    <link href="assets/css/heroes.css" rel="stylesheet">
  

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Fifth navbar example">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Détails</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
  
        <div class="collapse navbar-collapse" id="navbarsExample05">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item pe-4">
              <a class="nav-link active" aria-current="page" href="index.php?p=<?php 
              if( $pro->getcategorie()=="Lait Corps")
              {
                echo 'lait';
              
              }
              else if( $pro->getcategorie()=="Deodorant")
              {
                echo 'deo';
               
              
              }
              else if($pro->getcategorie()=="Parfum")
              {
                  
                echo 'parfum';
              }
              else if( $pro->getcategorie()=="Gel de douche")
              {
               echo 'geldouche';
              
              }
              else if( $pro->getcategorie()=="Savons")
              {
                  echo 'savons';
              
              }
              else if( $pro->getcategorie()=="Vêtements")
              {
               
              echo 'vetements';
              }
              else if( $pro->getcategorie()=="Autres")
              {
                 
              echo 'autre';
              }
              else if( $pro->getcategorie()=="Accessoires")
              {
                  
              echo 'accessoires';
              }
              else
              {
                echo 'Juju Store';
              }
              
              
            
              
              
              ?> "> << Retour </a>
            </li>
            <li class="nav-item pe-5">
              <a class="nav-link disabled" aria-current="page" href="#"> </a>
            </li>
            <li class="nav-item pe-5">
              <a class="nav-link disabled" aria-current="page" href="#"> </a>
            </li>
            <li class="nav-item pe-5">
              <a class="nav-link disabled" aria-current="page" href="#"> </a>
            </li>
            <li class="nav-item pe-5">
              <a class="nav-link active" aria-current="page" href="#"> </a>
            </li>
            <li class="nav-item pe-5">
              <a class="nav-link disabled" aria-current="page" href="#"> </a>
            </li>
            <li class="nav-item pe-5">
              <a class="nav-link disabled" aria-current="page" href="#"> </a>
            </li>
            <li class="nav-item pe-5">
              <a class="nav-link disabled" aria-current="page" href="#"> </a>
            </li>
            <li class="nav-item pe-5">
              <a class="nav-link active" aria-current="page" href="index.php"> ACCEUIL </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <section class=" det avalaible merriweather py-5 ">
      <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5 bg-dark bg-opacity-10">
          <div class="col-10 col-sm-8 col-lg-6">
            <img src="assets/img/produit/<?php echo $pro->getphoto()?>" class="d-block mx-lg-auto img-fluid" alt="not found" width="700" height="500" loading="lazy"><br>
            <p class="lead text-end merriweather cc-titre bg-light bg-opacity-10"> <?php echo $pro->getprix()?> XOF <br>
            <?php if($pro->getstock()>0 && isset( $_SESSION['jujupseudo']))  
            {?>
              <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <form action="" method="post"><div class="mx-5 ">
                <input type="submit" name='submit' class="btn btn-outline-success btn-lg px-4" value="Commander">
                <input type="number" min=1 max=<?php echo $pro->getstock() ?>  required name="qte" id="" placeholder="Quantité" class="bg-dark bg-opacity-25 border-dark"></div>
              </form>
            </div>
            
          
          <?php
              }
              else
              {
                if( !isset( $_SESSION['jujupseudo']))  
                {?>
                  <p class="lead cou"> Veuillez vous <a href="index.php?p=insc">inscrire</a> au vous <a href="connexion.php">connecter</a> pour passer une commande svp <br></p>
                  <?php
                }
              



              }
              
              ?>
  </div>
          <div class="col-lg-6">
            <h1 class="display-5 cc-text redressed lh-1 mb-3 "><?php echo $pro->getnom()?></h1>
            <p class="lead cou"><?php echo $pro->getquantiter()?> <br></p>
            <p class="cc-titre merriweather"> Description <br></p>
            <p class="lead cou"><?php echo $pro->getdescription()?> <br>
            </p>
            <p class="cc-titre merriweather"> Composants <br></p>
            <p class="lead cou"><?php echo $pro->getcomposant()?> <br> </p>
            <p class="cc-titre merriweather"> Specifications <br></p>
            <p class="lead cou"><?php echo $pro->getspecification()?> <br> </p>
            </div>
            <div class="col-10 col-sm-8 col-lg-6">
              <p class="lead merriweather stt bg-light bg-opacity-10"> <?php if( $pro->getstock()> 0) {echo 'En Stock ';} else { echo 'Stock écoulé';  } ?>  <br></p>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php
}
else
{
  ?>
  <script>

<?php $redirection="index.php"?>
            url="<?php echo $redirection;?>"
      
      setTimeout("window.location=url",0)
</script>
<?php

}


