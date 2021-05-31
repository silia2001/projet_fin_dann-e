 <html>
<!--  <?php 
 // phpinfo();
 ?>
     -->      <head>
              <title>Simulation</title>
              <link rel="stylesheet" type="text/css" href= "./style.css"/>
              <script type="text/javascript" src="formulaire.js"></script>
              <script type="text/javascript" src="verification.js"></script>
          </head>
          <body>
     


          	<div id="banner1">
            </div>

             <nav>
                <ul>
                
            <li>    
              <a href="index.php">ACCUEIL  </a>
 <a href="site.php">Notre Site </a>  

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


  <div id="inscription">
             
   </div>

 <div id="connexion">
 </div>

  <div id="simulation">
             
    </div>
     <div id="contenuprincipale">

<!-- 
     <p1>
  Projet réalisé par Massissilia, Jean, et Nassim, 
  élèves de BTS SNIR, au lycée Louis Armand.

</p1>
        
          <p>
    

   <img src="image/bateau.jpg" />
     </p> -->

    </div>

   

          


          </body>


</html>





<!-- <label for="pet-select">Choisir le trajet</label>

<select name="Simulation" id="pet-select">
    
    <option value="dog">Dog</option>
    <option value="cat">Cat</option>
    <option value="hamster">Hamster</option>
    <option value="parrot">Parrot</option>
    <option value="spider">Spider</option>
    <option value="goldfish">Goldfish</option>
</select> -->