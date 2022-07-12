<?php
try { 
    $connec=new PDO (
    "mysql:host=localhost;dbname=jujustore","root","");
    }

catch (PDOException $th) 
{
    echo"ERREUR CONNECTION".$th->getMessage();
    exit();
}
