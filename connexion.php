
 <?php
 session_start();
?>
 <!-- Bootstrap CSS -->

 <link rel="stylesheet" href="assets/css/signin.css" /> 
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

<main class="form-signin">
  <form method='post'>

    <h1 class="h3 mb-3 fw-normal text-light redressed">Connectez-vous ici</h1>

    <div class="form-floating mb-3 ">
      <input type="emailorpseudo" class="form-control bg-light bg-opacity-10" name='pseudo' id="floatingInput" placeholder="nom@gmail.com ">
      <label for="floatingInput">Adresse email ou pseudo</label>
    </div>
    <div class="form-floating mb-3 bg-dark bg-opacity-25">
      <input type="password" class="form-control bg-light bg-opacity-10" name='password' id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Mot de passe</label>
    </div>

    <div class="checkbox mb-3  text-light">
      <label>
        <input type="checkbox" value="remember-me"> Se souvenir de moi
      </label>
    </div>
    <input class="w-100 btn btn-lg btn-outline-info" name='submit' value='Connexion' type="submit">
  </form>
  <?php
  if (isset($_POST['submit']))
{ 
  include_once 'admin/connect.php';
  include_once 'admin/classusers.php';
 
  extract( $_POST);
  if(  !empty($pseudo)&& !empty($password) )
  {

 

$use=new user;
  $use-> connecter($pseudo,$password);
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
</main>


    
  </body>
</html>
<script src="assets/js/form-validation.js"></script>