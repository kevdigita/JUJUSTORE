<?php 
session_start();
include_once "admin/connect.php";
?>
<!doctype html>
<html lang="fr">
  <head>
      

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Font awesome cdn CSS -->
<link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- Bootstrap CSS -->
  
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    

        <link rel="stylesheet" href="assets/css/style.css" />

  
    <title>LONGRICH AL KAUSAR</title>
  </head>
  <body>
    <?php
  if(isset($_GET['p']))
{
    if($_GET["p"]=="deco")
    {
        session_unset();
        session_destroy();
    
    }
    if($_GET["p"]!="voirp")
    {
     
    include_once "menu.php";
    }

if($_GET["p"]=="insc")
{

    if(isset($_SESSION['jujupseudo']))
    {
        include_once "accueil.php";
    }
    else
    {

  
    include_once 'inscription.php';
  }
}
else if($_GET["p"]=="con")
{
    if(isset($_SESSION['jujupseudo']))
    {
        include_once "accueil.php";
    }
    else
    {

   include_once 'connexion.php';
  }
   

}
else if($_GET["p"]=="aj")
{
  

   include_once 'ajoupro.php';
  
   

}
else if($_GET["p"]=="pan")
{
  

   include_once 'panier.php';
  
   

}
else if($_GET["p"]=="pro")
{
    include_once 'produits.php';

}
else if($_GET["p"]=="voirp")
{
    include_once 'plus.php';

}
else if($_GET["p"]=="lait")
{
    include_once 'lait.php';

}
else if($_GET["p"]=="deo")
{
    include_once 'deo.php';

}
else if($_GET["p"]=="parfum")
{
    include_once 'parfum.php';

}
else if($_GET["p"]=="geldouche")
{
    include_once 'geldouche.php';

}
else if($_GET["p"]=="savons")
{
    include_once 'savons.php';

}
else if($_GET["p"]=="vetements")
{
    include_once 'vetements.php';

}
else if($_GET["p"]=="autre")
{
    include_once 'autre.php';

}
else if($_GET["p"]=="accessoires")
{
    include_once 'accessoires.php';

}
else
{
    include_once "accueil.php";
}
}
else
{

    include_once "menu.php";
    
    include_once "accueil.php";

}

include_once "footer.php";
?>


  </body>
</html>