
 <script src="assets/js/bootstrap.bundle.min.js" ></script>
  <nav class=" cc-navbar navbar navbar-expand-lg position-fixed navbar-dark w-100">
      <div class="container-fluid">
        <a class="navbar-brand  mx-4 py-3 " href="#">
          <?php
            if(isset($_GET['p']))
            {

            
        if($_GET["p"]=="lait")
{
  echo 'Lait Corps';

}
else if($_GET["p"]=="deo")
{
  echo 'Deodorants';
 

}
else if($_GET["p"]=="parfum")
{
    
  echo 'Parfums';
}
else if($_GET["p"]=="geldouche")
{
 echo 'Gel de douche';

}
else if($_GET["p"]=="savons")
{
    echo 'Savons';

}
else if($_GET["p"]=="vetements")
{
 
echo 'Vêtements';
}
else if($_GET["p"]=="autre")
{
   
echo 'Autres';
}
else if($_GET["p"]=="accessoires")
{
    
echo 'Accessoires';
}


else
{
  echo 'LONGRICH AL KAUSAR';
}
}
else
{
  echo 'LONGRICH AL KAUSA';
}?>
          
      
      
      
      
      
      </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item pe-4">
              <a class="nav-link active" aria-current="page" href="index.php">ACCEUIL</a>
            </li>
            <li class="nav-item pe-4">
              <a class="nav-link" href="index.php?p=pro">PRODUITS</a>
            </li>
            <li class="nav-item dropdown pe-4">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                CATEGORIES
              </a>
              <ul class="dropdown-menu bg-dark bg-opacity-10 style-menu" aria-labelledby="navbarDropdown ">
                <li><a class="dropdown-item text-light" href="index.php?p=lait">Lait corps</a></li>
                <li><a class="dropdown-item text-light" href="index.php?p=deo">Deodorants</a></li>
                <li><a class="dropdown-item text-light" href="index.php?p=parfum">Parfums</a></li>
                <li><a class="dropdown-item text-light" href="index.php?p=geldouche">Gel de Douche</a></li>
                <li><a class="dropdown-item text-light" href="index.php?p=savons">Savons</a></li>
                <li><a class="dropdown-item text-light" href="index.php?p=vetements">Vêtements</a></li>
                <li><a class="dropdown-item text-light" href="index.php?p=accessoires">Accessoires</a></li>   
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item text-light" href="index.php?p=autre">Autres</a></li>
              </ul>
            </li>
<?php
  if(isset($_SESSION['jujupseudo'])&& $_SESSION['jujupseudo']=="VENDEUR")
  {
     

     ?>       <li class="nav-item pe-4">
              <a class="nav-link" href="index.php?p=aj">AJOUTER UN PRODUIT</a>
            </li><?php
}


?>



          </ul>
          <form class="d-flex text-light">
            <input class="form-control me-2 bg-dark  text-light" type="search" placeholder="Que recherchez-vous ? " aria-label="Search">
            <input class="btn btn-outline-success bg-dark " type="submit" value="RECHERCHE">
          </form>
        </div>
      </div>
    </nav>
  
