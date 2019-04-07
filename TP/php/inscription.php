<?php
  

  include "configurer1.php";


  $base = connect();   

 

  $n = $_REQUEST['nom'];   
  $p = $_REQUEST['prénom'];
  $t = $_REQUEST['numtel'];  
  $g = $_REQUEST['genre']; 
  $e = $_REQUEST['email']; 
  $c = $_REQUEST['numcin'];   
  $d = $_REQUEST['datedenaissance'];  
  $na = $_REQUEST['noationalite']; 
  $i = $_REQUEST['interets'];  
  $mdp = $_REQUEST['mdp'];  
  $cmdp = $_REQUEST['cmdp'];  


  $req = "INSERT INTO users (id,nom,prénom,numtel,genre,email,numcin,datedenaissance,nationalité,interets,mdp,ccmdp) VALUES (null, '$n','$','$t','$g','$e','$c','$d','$na','$i','$mdp','$cmdp')";
  

  $resp = $base->exec($req);     

  if ($resp==1){
    echo "données insérées";
}  else {
    echo "vérifie la requête sinon le fichier configurer1";
}


 ?>