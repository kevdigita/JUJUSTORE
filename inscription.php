<br><br>
    <!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
  
    <!-- Custom styles for this template -->
    <link href="assets/css/form-validation.css" rel="stylesheet">

<?php
include_once 'admin/classusers.php';
if (isset($_POST['conf']))
{
  extract($_POST);
$code=md5($passcode);
if($_SESSION['code']==$code)
{


$newuse=new user;



}
else

{
  ?> <br> 
  <div class="alert alert-dark text-danger">
   <button
   type="button"  data-dismiss="alert"
   aria-hidden="true">
  &times;
 </button>
 
       <h5>ERREUR DE CODE </h5>
     </div>
     <br> <?php 

}

}
if (isset($_POST['submit']))
{
  extract($_POST);
  if(  !empty($pseudo)&& !empty($nom) && !empty($prenom) && !empty($num)  && !empty($email)  && !empty($pass)&&!empty($passconf))
  {


$pseudo=strtoupper($pseudo);
function alphanum($pseudo)
{

preg_match("/([^A-Za-z0-9\s])/",$pseudo,$result);
if (!empty($result)) {
  return false;
}
else {
  return true;
}

}
if(str_word_count($pseudo)==1)
{
$result=alphanum($pseudo);
if ($result==false) 
{
  ?> <br> 
  <div class="alert alert-dark text-danger">
   <button
   type="button"  data-dismiss="alert"
   aria-hidden="true">
  &times;
 </button>
 
       <h5>LE PSEUDO NE DOIT CONTENIR QUE DES CHIFFRE ET DES LETTRES</h5>
     </div>
     <br> <?php 
}
else
{    if (strlen($pass)<6) 
  {
    ?> <br> 
    <div class="alert alert-dark text-danger">
     <button
     type="button"  data-dismiss="alert"
     aria-hidden="true">
    &times;
   </button>
   
         <h5>LE MOT DE PASSE DOIT CONTENIR AU MOIN 6 CARACTERES</h5>
       </div>
       <br> <?php 
  }
    else
    {
  if($pass!=$passconf)
  {
    ?> <br> 
    <div class="alert alert-dark text-danger">
     <button
     type="button"  data-dismiss="alert"
     aria-hidden="true">
    &times;
   </button>
   
   
         <h5>MOTS DE PASSE NON IDENTIQUE</h5>
       </div>
       <br> <?php 
  }
else
{ if(empty($adresse))
  {
    $adresse=NULL;
  }

  $newus=new user;

  $val=$newus->verif($email);
  if($val=true)
  { 

    $newuse = new user;
$pass=md5($pass);


$_SESSION['ps']=$pseudo;
$_SESSION['nu']=$num;
$_SESSION['no']=$nom;
$_SESSION['pr']=$prenom;
$_SESSION['pa']=$pass;
$_SESSION['ad']=$adresse;
$_SESSION['em']=$email;

$newuse->inscription($_SESSION['ps'],$_SESSION['nu'],$_SESSION['no'],$_SESSION['pr'],$_SESSION['pa'],$_SESSION['em'],$_SESSION['ad']);

 
  }


}
}

}
}
else{
?> <br> 
<div class="alert alert-dark text-danger">
 <button
 type="button"  data-dismiss="alert"
 aria-hidden="true">
&times;
</button>


     <h5>LE PSEUDO EST EN UN SEUL MOT</h5>
   </div>
   <br> <?php $reu=false;
   }
  }
  else{
    ?> <br> 
    <div class="alert alert-dark text-danger">
     <button
     type="button"  data-dismiss="alert"
     aria-hidden="true">
    &times;
    </button>
    
    
         <h5>VEUILLER REMPLIR LES CHAMPS OBLIGATOIRES</h5>
       </div>
       <br> <?php 
       }

}
if(!isset($code))
{
?>

    <br><br>
    <!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
  
    <!-- Custom styles for this template -->
    <link href="assets/css/form-validation.css" rel="stylesheet">

<div class="container text-light merriweather ">
  <main>
   
    <div class="py-5 text-center ">
      <h5>Formulaire d'inscription</h5>
      <p class="lead">Veuillez remplir les champs ci-dessous</p>
    </div>


    <div class="row g-5">
      <div class="col">
        <h4 class="mb-3"></h4>
        <form class="needs-validation" method="post" novalidate>
            
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="lastName " class="form-label ">Nom</label>
              <input type="text" class="form-control bg-light bg-opacity-25" id="lastName "  name="nom" placeholder="" value="" required>
              <div class="invalid-feedback">
                Veuillez entrer votre nom 
              </div>
            </div>

            <div class="col-sm-6">
                <label for="firstName" class="form-label">Prénom</label>
                <input type="text" class="form-control bg-light bg-opacity-25" id="firstName"   name="prenom" placeholder="" value="" required>
                <div class="invalid-feedback">
                 Veuillez entrer votre prénom
                </div>
              </div>
  

            <div class="col-12">
              <label for="username" class="form-label">type de compte</label>
              <div class="input-group has-validation">
                
              <label for="username" class="form-label">CLIENT</label>
                <input type="radio" class=" "  username="acheteur"  name="pseudo" placeholder="Nom d'utilisateur" required>

                
              <label for="username" class="form-label">BOUTIQUE</label>
                <input type="radio"  class="" username="vendeur" name="pseudo" placeholder="Nom d'utilisateur" required>
                
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control bg-light bg-opacity-25" id="email"   name="email" placeholder="christhom@gmail.com" required>
              <div class="invalid-feedback">
              Veuillez entrer un email valide svp
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Adresse<span class="text-muted">(Optionel)</span></label>
              <input type="text" class="form-control bg-light bg-opacity-25" id="address"   name="adresse "placeholder="C/543 Kpondehou" >
              <div class="invalid-feedback">
                Entrez une adresse  valide svp
              </div>
            </div>

            <div class="col-md-5">
              <label for="number" class="form-label">Numéro de téléphone</label>
              <input type="tel" class="form-control bg-light bg-opacity-25" id="number"   name="num" placeholder="+229 94 98 92 20" required>        
              <div class="invalid-feedback">
               Veuillez entrer un numéro de téléphone valide
              </div>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control bg-light bg-opacity-25"   name="pass" id="floatingPassword" placeholder="mot de passe">
                <label for="floatingPassword">Mot de passe</label>
                <div class="invalid-feedback">
                    Veuillez renseigner votre mot de passe
                </div>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control bg-light bg-opacity-25"   name="passconf" id="floatingPassword" placeholder="mot de passe">
                <label for="floatingPassword">Mot de passe</label>
                <div class="invalid-feedback">
                    Veuillez repeter votre mot de passe
                </div>
              </div>

          </div>

          <hr class="my-4">

          <input class="w-100 btn btn-outline-success btn-lg" type="submit" value="S'inscrire"  name="submit" >
        </form>
      </div>
    </div>
  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">JujuStore</p>
  </footer>
</div>
      <script src="assets/js/form-validation.js"></script>

      <?php 
       }
?>