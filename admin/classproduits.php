<?php
include_once 'connect.php';
class produit
{
    private $id;
    private $nom;
    private $photo;
    private $composant;
    private $specification;
    private $description;
    private $categorie;
    private $stock;
    private $prix;
    private $quantiter;

    public function getnom()
    {
        
        return $this->nom;
    }
    public function getquantiter()
    {
        
        return $this->quantiter;
    }
    public function getstock()
    {
        
        return $this->stock;
    }
    public function getcategorie()
    {
        
        return $this->categorie;
    }
    public function getprix()
    {
        
        return $this->prix;
    }
    
    public function getphoto()
    {
        
        return $this->photo;
    }
    
    public function getcomposant()
    {
        
        return $this->composant;
    }
    
    public function getid()
    {
        
        return $this->id;
    }
    
    public function getspecification()
    {
        
        return $this->specification;
    }
    public function getdescription()
    {
        
        return $this->description;
    }

    //setter
    public function setnom($nom)
{
    
     $this->nom=$nom;
}
public function setcategorie($categorie)
{
    
     $this->categorie=$categorie;
}
public function setquantiter($quantiter)
{
    
     $this->quantiter=$quantiter;
}
public function setprix($prix)
{
    
     $this->prix=$prix;
}

public function setphoto($photo)
{
    
     $this->photo=$photo;
}

public function setcomposant($composant)
{
    
     $this->composant=$composant;
}

public function setid($id)
{
    
     $this->id=$id;
}
public function setstock($stock)
{
    
     $this->stock=$stock;
}

public function setspecification($specification)
{
    
     $this->specification=$specification;
}
public function setdescription($description)
{
    
     $this->description=$description;
}

public function  categorievu($categorie=false)
{
    global $connec;

    if($categorie!='accueil')
    {

  
    if($categorie==false)
    {

      $q=$connec->prepare("SELECT* FROM produit WHERE stock >= 0 ORDER BY time desc LIMIT 10");
    }
    else
    {
      $q=$connec->prepare("SELECT* FROM produit WHERE categorie=\"$categorie\" and stock >= 0 ORDER BY time desc LIMIT 10");

    }
    $q->execute();
?>
 <section class="avalaible redressed py-5 bg-dark text-light">
      <div class="container">
        <div class="row  g-4">

<?php
while($pro=$q->fetch(PDO::FETCH_ASSOC))
{
   
produit::setphoto($pro['photo']);
produit::setnom($pro['nom']);

if(str_word_count($pro['description']) < 9)
{

produit::setdescription($pro['description']);

}
else
{

  function split($phrase)
  {
$retour=array();
$delimiteurs=' .!?, :;(){}[]%';
$tok=strtok($phrase," ");


while(strlen(join(" ",$retour))!=strlen($phrase))
{
  array_push($retour,$tok);
  $tok=strtok($delimiteurs);
}
return $retour;

  }
 
  $mot=split($pro['description']);
  $pro['description']=$mot[1];
for($i=2;$i< 9;$i++)
{
  $pro['description']=$pro['description']." ".$mot[$i];
}
produit::setdescription($pro['description']);
}


produit::setprix($pro['prix']);

produit::setid($pro['id']);

?> 
          <div class="col">
            <div class="jj-card h-100">
              <img src="assets/img/produit/<?php echo $this->photo ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title tt-titre"><?php echo $this->nom  ?></h5>
                <p class="card-text"><?php echo  $pro['description'] ;?><a class="link-deco" href="index.php?p=voirp&id=<?php echo $this->id  ?>">...voir plus</a></p>
                <div class="card-footer bg-dark text-sm-end ">
                  <h5><?php echo $this->prix ?> XOF</h5>
                </div>
              </div>
            </div>
          </div>


<?php
}  
}
else
{

    
  $q=$connec->prepare("SELECT* FROM produit WHERE  stock >=0 ORDER BY time desc LIMIT 4");
  $q->execute();
  while($pro=$q->fetch(PDO::FETCH_ASSOC))
{
  produit::setphoto($pro['photo']);
  produit::setid($pro['id']);
produit::setnom($pro['nom']);
produit::setdescription($pro['description']);
  ?>
  <div class="col">
            <div class="card">
            <a class="link-deco" href="index.php?p=voirp&id=<?php echo $this->id?>">  <img src="assets/img/produit/<?php echo $this->photo ;?>" class="card-img-top" alt="...">
              </a>  <div class="card-body">
                <h5 class="card-title"><?php echo $this->nom ?></h5>
                <p class="card-text "><?php echo $this->description ?></p>
              </div>
            </div>
          </div>
          <?php
}

}
?>
  </div>
          </div>
          
      </section>
          <?php

}
 
public function ajout($photo,$nom,$desc,$prix,$qte,$categorie)
{

  produit::setphoto($photo);
  produit::setnom($nom);
  produit::setdescription($desc);
  produit::setprix($prix);
 
  produit::setstock($qte);
  produit::setcategorie($categorie);
  

  global $connec;

  $q=$connec->prepare( "INSERT INTO produit (photo,nom,description,prix,stock,categorie)
  VALUES(?,?,?,?,?,?)");
$q->execute([$this->photo,$this->nom,$this->description,$this->prix,$this->stock,$this->categorie]);
?>
<script>

<?php $redirection="index.php"?>
              url="<?php echo $redirection;?>"
        
        setTimeout("window.location=url",0)
</script>
<?php


}
public function voirplus($id)
{

  global $connec;
  $q=$connec->prepare("SELECT* FROM produit WHERE id=\"$id\" ");
  $q->execute();
  $pro=$q->fetch(PDO::FETCH_ASSOC);
 


  produit::setnom($pro['nom']);
produit::setphoto($pro['photo']);
  produit::setdescription($pro['description']);
  produit::setprix($pro['prix']);
  produit::setspecification($pro['specification']);
  produit::setcomposant($pro['composant']);
  produit::setstock($pro['stock']);
  produit::setcategorie($pro['categorie']);
  produit::setquantiter($pro['quantiter']);

} 




}