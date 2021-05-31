<?php
include_once 'page_header.php';
include_once 'functions.php';

if(isset($_FILES["file"]["tmp_name"])):
?>
  <section style="margin-top: 40px; padding-right: 500px; padding-left: 500px">
    <ul class="collection">


 <?php

  #test si l'utilisateur a envoyé une requete POST avec comme donnée submit
  if(isset($_POST["submit"])) {
    $f = $_FILES["file"]["tmp_name"];
    #$content = file_get_contents($file);

    $arr = array();

    #Lire le contenu du fichier et le stocker dans $arr
    if ($file = fopen($f, "r")) {
      while(!feof($file)) {
          $c = fgets($file);
          if (strpos($c, '$GPGGA') !== false){
            $arr[] = $c;
          }
      }
      fclose($file);
    }

    $id = getMaxId();

    for($i=0; $i<count($arr); $i++){
      $splitted = explode(',', $arr[$i]); #renvoie un tableau
      $heure = hourFromChar($splitted[1]); #valeur de la case 1 du tableau
      $lat = str_replace(',', ' ', $splitted[2].','.$splitted[3]);
      $long = str_replace(',', ' ', $splitted[4].','.$splitted[5]);

      $lat = degree2decimal($lat);
      $long = degree2decimal($long);

      insertStep($id,$i,$heure,$lat,$long); #pour inserer dans la base de donnée
      echo '<li class="collection-item avatar">
        <img src="image/map.png" alt="" class="circle">
        <span class="title">Étape '.($i+1).'</span>
        <p> Latitude : '.$lat.'<br>
            Longitude : '.$long.'
        </p>
        <a href="map.php" class="secondary-content"><i class="material-icons"> Carte </i></a>
      </li>';
    }
    #$conn->close();
  }

 ?>


</ul>
</section>
<?php
else:
  ?>
  <div class="row" style="margin-top: 20px">
    <div class="col s12 m6">
      <div class="card red lighten-5">
        <div class="card-content red-text">
          <span class="card-title"><b>Erreur</b></span>
          <p>Il semblerai que vous n'ayez pas saisi de trajet sous la forme d'un fichier <b>.nmea</b> interprétable par notre site.</p>
          <p>Veuillez envoyer un nouveau fichier en cliquant sur le lien ci-dessous.</p>
        </div>
        <div class="card-action">
          <a href="simulation.php">Lien</a>
        </div>
      </div>
    </div>
  </div>
  <?php
endif;


?>
