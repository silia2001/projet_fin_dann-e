<?php
include_once 'page_header.php';





?>

<div id="banner1">
            </div>

            
<div class="row">
  <div class="col s3 m3 l3"></div>
   <div class="col s6 m6 l6">
     <div class="card">
       <div class="card-image">
         <img src="image/open_street_map.png" width="400" height="400">
       </div>
       <div class="card-content">
         <h5>Notre site a pour objectif de permettre de visualiser vos trajets en bateau !</h5>
       </div>
       <form action="upload.php" method="post" enctype="multipart/form-data" style="padding: 30px">
         <h6>Selectionner un trajet en .nmea</h6>
         
         <div class="file-field input-field">
          <div class="btn">


           <!--  <FORM>
<SELECT name="nom" size="1">
<OPTION>lundi
<OPTION>mardi
<OPTION>mercredi
<OPTION>jeudi
<OPTION>vendredi
</SELECT>
</FORM> -->

            <span> Fichier </span>



        
            <input type="file" name="file" id="fileToUpload">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
          </div>
        </div>
        <button class="btn waves-effect waves-light" type="submit" name="submit"> Envoyer </button>
       </form>
     </div>
   </div>
  <div class="col s3 m3 l3"></div>
 </div>





<?php

?>

