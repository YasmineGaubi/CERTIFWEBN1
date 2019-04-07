<?php

 function connect(){
     
   $server = "localhost";
   $base = "certifwebn1";
   $username = "root";
   $pass = "";
 
 
 try { 

    
     $con = new PDO("mysql:host=$server;dbname=$base",$username,$pass);

     return $con;
     
 } catch (PDOException $e) {
    
   die("Erreur:"); 
}
 }
 ?>