<html>
<!--  <?php 
 // phpinfo();
 ?>
     -->      <head>
              <title>Simulation</title>
              <link rel="stylesheet" type="text/css" href= "./style.css"/>
              <script type="text/javascript" src="formulaire.js"></script>
          </head>
          <body>
     


          	<div id="banner1">
            </div>

             <nav>
                <ul>
                
            <li>    
              <a href="index.php">ACCUEIL  </a>
 <a href="index.php">Notre Site </a>  

             <?php
  if (!isset($_COOKIE ['pseudo' ])){
  ?>  

  <a class="mouse" onclick="choixConnexion('inscription');">Inscription  &emsp; </a>
  <a class="mouse" onclick="choixConnexion('connexion');">Connexion &emsp;</a>
  
  <?php
  } 
  else {
  ?>

  <a href="index.php?profil"> <?php echo ucfirst ($_COOKIE['pseudo'] ) ;?> </a>
    <a href="simulation.php">Simulation </a>
  <a href="deconnexion.php">Déconnexion </a>
  
  <?php
  }
  ?>

  </a>
</li>

</ul>
</nav>
          
<div id="banner2">
            </div>

<aside>
  <div id="inscription">
             
   </div>

 <div id="connexion">
  

      </div>      

</aside>


      <!--      <script>

var canvas = document.getElementById("canvasGlobal");
var context = canvas.getContext("2d");

 
  </script> -->
 
     <div id="contenuprincipale">


     <p1>
  Projet réalisé par Massissilia, Jean, et Nassim, 
  élèves de BTS SNIR, au lycée Louis Armand.


</p1>
         <!--    <p>
    
   <img src="image/bateau.jpg" />
     </p> -->

    </div>

   

          


          </body>


</html>