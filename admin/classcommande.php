
<?php

class commande
{
private $article;
private $username;
private $quantiter;
private $statut;

public function getarticle()
{
    
    return $this->article;
}
public function getquantiter()
{
    
    return $this->quantiter;
}
public function getusername()
{
    
    return $this->username;
}
public function getstatut()
{
    
    return $this->statut;
}



public function setarticle($article)
{
    
     $this->article=$article;
}
public function setstatut($statut)
{
    
     $this->statut=$statut;
}
public function setquantiter($quantiter)
{
    
     $this->quantiter=$quantiter;
}
public function setusername($username)
{
    
     $this->username=$username;
}


public function commander($qte,$art)
{

    commande::setquantiter($qte);
    commande::setusername($_SESSION['jujuid']);
    commande::setarticle($art);
  require "connect.php";
  $sql="SELECT*  FROM produit WHERE id =\"$this->article\" ";
    
  $p=$connec->prepare($sql);
  $p->execute(); 
  $pro=$p->fetch(PDO::FETCH_ASSOC);
     $qte=$pro['stock']-$this->quantiter;
  $req=$connec->prepare("UPDATE produit SET stock=\"$qte\" WHERE id =\"$this->article\"");
  $req->execute();

  $q=$connec->prepare( "INSERT INTO commande (quantite,username,article)
  VALUES(?,?,?)");
  
$q->execute([$this->quantiter,$this->username,$this->article]);






}




}