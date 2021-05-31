<?php

// le code a tester pour la démo

 // $id = mysqli_connect("localhost", "root", "root","bateau");
 
 //  //ici On vérifie la connexion
 //                    if($id->connect_error){
 //                        die('Erreur : ' .$id->connect_error);
 //                    }
 //                      echo 'Connexion à la base de données réussi ! <br>';





$id= mysqli_connect("localhost","root","root","bateau") or die ("Echec de la connexion");
var_dump($_GET);




if(isset($_GET["submitconnexion"])) {

$user_pseudo=$_GET["user_pseudo"]; 
$user_passeword=$_GET["user_passeword"];

$sql = "SELECT * FROM utilisateur WHERE pseudo='$user_pseudo' AND pass1='$user_passeword'"; 

echo $sql;
$res=mysqli_query($id,$sql);

  print_r($res);
  mysqli_num_rows($res);
  if (mysqli_num_rows($res)>0)
  {
	setcookie ('pseudo', $user_pseudo, time()+3600,'/'); //création du cookie 
    header  ("location: index.php?pseudo=$user_pseudo");
  }

      
}


if (isset($_GET["submitinscription"])){


$user_name=$_GET["user_name"]; 
$user_prenom=$_GET["user_prenom"]; 
$user_pseudo=$_GET["user_pseudo"]; 
$user_mail=$_GET["user_mail"]; 
$user_passeword=$_GET["user_passeword"]; 

 $sql = "INSERT into utilisateur (name, prenom, pseudo,E_mail,pass1)            
            VALUES ('$user_name', '$user_prenom', '$user_pseudo', '$user_mail','$user_passeword')";
// echo $sql;
// $res=mysqli_query($id,$sql);
 
echo " <script> 
alert(\"inscription réussi\")></script>"; 
header ("Refresh:0,5; URL=./index.php");



}



if(isset($_GET["submitsimulation"])) {
$sql = "SELECT * FROM coordonneesgps";
echo '<script>';
echo 'console.log($sql)';
echo '</script>'
echo $sql;

$res=mysqli_query($id,$sql);
// echo $res;
}
	//WHERE idTrajet='$id' AND idGPS='$i' AND heure='$heure' AND longitude='$long' AND latitude='$lat'
// SELECT * FROM coordonneesgps order by desc limit 1 ";   // selectionner le dernier 
?>
