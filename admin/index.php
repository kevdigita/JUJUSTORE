
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- Bootstrap CSS -->
  
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    

        <link rel="stylesheet" href="../assets/css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    



<?php
include_once "connect.php";
if(isset($_GET['p']))
{
if($_GET["p"]=="commande")
{


  
    include_once 'commande.php';
  
}

else if($_GET["p"]=="ajoutpro")
{


  
    include_once 'ajoupro.php';
  
}

else
{

include_once "menu.php";

}
}
else
{
    include_once "menu.php";
}

?></body>
</html>