

<br><br>

<link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- Bootstrap core CSS -->
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
  
    <!-- Custom styles for this template -->
    <link href="assets/css/form-validation.css" rel="stylesheet">
<?php
  
  include_once "admin/classproduits.php";
if (isset($_POST['POSTER']))
{
  

if( $_POST["qte"]> 0 &&   $_POST["prix"]>0)
{


 
      // Variable
  
      $photo = $_FILES['img']['name'];
      $upload = "assets/img/produit/".$photo;
      move_uploaded_file($_FILES['img']['tmp_name'],$upload);

extract($_POST);
     
      // Requete ajout
      
     $art=new produit;
     $art->ajout($photo,$nom,$img_desc,$prix,$qte,$categorie); 
       
  
  }
  else
  {?><div class="alert alert-danger">
      <button
      type="button" class="close" data-dismiss="alert"
      aria-hidden="true">
     &times;
   </button>

  <h2>LE PRIX ET LA QUANTITER DOIVENT ETRE SUPERIEUR A 0 </h2>
  </div><?php

  }
     
     
  }
  else
  {?>

<div class="row g-5">
      <div class="col">

<h1>AJOUTER L'ARTICLE </h1></caption>

      <form enctype="multipart/form-data" action="#" method="post">
                
      <div class="row g-3">
      <label >PHOTO DE L'ARTICLE</label>
    <input type="file" name="img" id="img" class="form-control bg-light bg-opacity-25"  required/>
    <label  id ="nom">NOM DE L'ARTICLE</label>
<input id="COM" type="text" name="nom"class="form-control bg-light bg-opacity-25"   required>
<label  id ="img_desc">DESCRIPTION DE L'ARTICLE</label>
<input id="COM" type="text"class="form-control bg-light bg-opacity-25"  name="img_desc"  required>



 <label id ="prix">PRIX</label>
<input type="tel" min=1  name="prix" class="form-control bg-light bg-opacity-25"  required>
 <label>quantité</label>
    <input type="tel" min=1 name="qte"class="form-control bg-light bg-opacity-25"  id="qte" required>


<label id ="categorie">CATEGORIE</label>
<select class=' text-danger' name="categorie" class="form-control bg-light bg-opacity-25" id="categorie" required>

<option value="Lait Corps">Lait Corps</option>
<option value="Deodorant">Deodorant</option>
<option value="Parfum">Parfum</option>

<option value="Gel de douche">Gel de douche</option>
<option value="savon">savon</option>
<option value="vetement">vetement</option>
<option value="Accesoires">Accesoires</option>


</select>
<br><br>
   <input class="btn-danger  submit" type="submit" name="POSTER" value="poster article" />
   </div>  </form>
      </div>
</div>
      <?php
  }
?>










