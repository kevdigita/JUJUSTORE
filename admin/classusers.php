<?php
class user 
{
    private $num;
    private $nom;
    private $prenom;
    private $adresse;
    private $username;
    private $email;
 
    public function getnom()
    {
        
        return $this->nom;
    }
    
    public function getprenom()
    {
        
        return $this->prenom;
    }
    
    public function getadresse()
    {
        
        return $this->adresse;
    }
    
    public function getnum()
    {
        
        return $this->num;
    }
    
    public function getusername()
    {
        
        return $this->username;
    }
    public function getemail()
    {
        
        return $this->email;
    }

    //setter
    public function setnom($nom)
{
    
     $this->nom=$nom;
}

public function setprenom($prenom)
{
    
     $this->prenom=$prenom;
}

public function setadresse($adresse)
{
    
     $this->adresse=$adresse;
}

public function setnum($num)
{
    
     $this->num=$num;
}

public function setusername($username)
{
    
     $this->username=$username;
}
public function setemail($email)
{
    
     $this->email=$email;
}


    
    
public function inscription ($username,$num,$nom,$prenom,$pass,$email,$adresse=false)
{
    
 user::setnom($nom);
    
 user::setnum($num);
     
 user::setprenom($prenom);
     
 user::setusername($username);

 user::setadresse($adresse);  

 user::setemail($email);

 global $connec; 

$err=true;
$sql="SELECT * FROM users WHERE username=\"$this->username\"";
$p=$connec->prepare($sql);
$p->execute();
$user=$p->fetch(PDO::FETCH_ASSOC);

if(!empty($user["username"]))

    {?>  
    
    <div class="alert alert-dark text-danger">
     <button
     type="button"  data-dismiss="alert"
     aria-hidden="true">
    &times;
    </button>
  
      <h5>CE NOM D'UTILISATEUR EXISTE DEJA  </h5>
      </div>
     <?php
     $err=false;
    
    }
    $sql="SELECT * FROM users WHERE email=\"$this->email\"";
$p=$connec->prepare($sql);
$p->execute();
$user=$p->fetch(PDO::FETCH_ASSOC);

if(!empty($user["email"]))

    {?>  
     <div class="alert alert-dark text-danger">
     <button
     type="button"  data-dismiss="alert"
     aria-hidden="true">
    &times;
    </button>

      <h5>CE EMAIL EXISTE DEJA   </h5>  </div>
    <?php
     $err=false;
    
    }
 
   if($err=true) {

     

  $q=$connec->prepare("INSERT INTO users (username,email,tel,nom,prenom,adresse,password) VALUES(?,?,?,?,?,?,?)");

$q->execute([$this->username,$this->email,$this->num,$this->nom,$this->prenom,$this->adresse,$pass]);



$_SESSION["jujupseudo"]=$this->username;
$_SESSION["jujunom"]=$this->nom;
$_SESSION["jujuprenom"]=$this->prenom;
$_SESSION["jujutel"]=$this->num;
$_SESSION["jujuadresse"]=$this->adresse;
$_SESSION["jujuemail"]=$this->email;

unset( $_SESSION['ps']);
unset( $_SESSION['nu']);
unset( $_SESSION['no']);
unset( $_SESSION['pr']);
unset( $_SESSION['pa']);
unset( $_SESSION['ad']);
unset( $_SESSION['em']);
unset( $_SESSION['code']);
?>
    <script>

<?php $redirection="index.php"?>
              url="<?php echo $redirection;?>"
        
        setTimeout("window.location=url",0)
</script>
<?php

        }
        
    }

public function connecter($pseudo,$pass)
{

    global $connec;

    if(filter_var($pseudo,FILTER_VALIDATE_EMAIL))
    {
      $q=$connec->prepare("SELECT* FROM users where email=\"$pseudo\"");
      $q->execute();
    
    }
    else{
    
    $pseudo=strtoupper($pseudo);
            $q=$connec->prepare("SELECT* FROM users where username=\"$pseudo\"");
            $q->execute();
    
    }
    $user=$q->fetch(PDO::FETCH_ASSOC);

    if(empty($user['username']))
    {

        ?>  
        <div class="alert alert-dark text-danger">
        <button
        type="button"  data-dismiss="alert"
        aria-hidden="true">
       &times;
       </button>
         <h5> AUCUN COMPTE TROUVER </h5>  </div>
       <?php
    }
else
{


if(md5($pass)==$user['password'])
{


user::setusername($user['username']);
user::setnom($user['nom']);
user::setprenom($user['prenom']);
user::setnum($user['tel']);
user::setadresse($user['adresse']);
user::setemail($user['email']);


$_SESSION["jujupseudo"]=$this->username;
    $_SESSION["jujunom"]=$this->nom;
    $_SESSION["jujuprenom"]=$this->prenom;
    $_SESSION["jujutel"]=$this->num;
    $_SESSION["jujuadresse"]=$this->adresse;
    $_SESSION["jujuemail"]=$this->email;
    ?>
    <script>

<?php $redirection="index.php"?>
              url="<?php echo $redirection;?>"
        
        setTimeout("window.location=url",0)
</script>
<?php
}
else {
    ?>  
    <div class="alert alert-dark text-danger">
    <button
    type="button"  data-dismiss="alert"
    aria-hidden="true">
   &times;
   </button>

     <h5>MOTS DE PASSE INCORRECT </h5>  </div>
   <?php
    
}

}

}
public function verif($email)
{

    global $connec; 

    user::setemail($email);

        $err=true;
  
        $sql="SELECT * FROM users WHERE email=\"$this->email\"";
    $p=$connec->prepare($sql);
    $p->execute();
    $user=$p->fetch(PDO::FETCH_ASSOC);
    
    if(!empty($user["email"]))
    
        {?>  
         <div class="alert alert-dark text-danger">
         <button
         type="button"  data-dismiss="alert"
         aria-hidden="true">
        &times;
        </button>
    
          <h5>CE EMAIL EXISTE DEJA   </h5>  </div>
        <?php
         $err=false;
        
        }

return $err;
}





}