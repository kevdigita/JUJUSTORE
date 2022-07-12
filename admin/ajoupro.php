<a class="btn btn-success" href="index.php ">RETOUR AU MENU</a></li>


<?php
  
  include_once "classproduits.php";
if (isset($_POST['POSTER']))
{
  

if( $_POST["qte"]> 0 &&   $_POST["prix"]>0)
{


 
      // Variable
  
      $photo = $_FILES['img']['name'];
      $upload = "../assets/img/produit/".$photo;
      move_uploaded_file($_FILES['img']['tmp_name'],$upload);

extract($_POST);
     
      // Requete ajout
      
     $art=new produit;
     $art->ajout($photo,$nom,$img_desc,$speci,$compo,$prix,$qte,$categorie,$vol); 
       
  
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


<h1>AJOUTER L'ARTICLE </h1></caption>

      <form enctype="multipart/form-data" action="#" method="post">
      <label >PHOTO DE L'ARTICLE</label>
    <input type="file" name="img" id="img" required/>
    <label  id ="nom">NOM DE L'ARTICLE</label>
<input id="COM" type="textareas" name="nom"  required>
<label  id ="img_desc">DESCRIPTION DE L'ARTICLE</label>
<input id="COM" type="textareas" name="img_desc"  required>
<label  id ="speci">SPECIFICATION DE L'ARTICLE</label>
<input id="COM" type="textareas" name="speci"  >
<label  id ="compo">COMPOSANT DE L'ARTICLE</label>
<input id="COM" type="textareas" name="compo"  >


 <label id ="prix">PRIX</label>
<input type="tel" min=1  name="prix"  required>
 <label>quantité</label>
    <input type="tel" min=1 name="qte" id="qte" required>
    <label>poid ou volume</label>
    <input type="text"  name="vol" id="vol" >

<label id ="categorie">CATEGORIE</label>
<select class=' text-danger' name="categorie" id="categorie" required>

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
      </form>

      <?php
  }
?>










