function choixConnexion (Choix) {
	 
	 
	if (Choix == 'connexion') {	// Comparaison
		
	var connex  = '<form method="get" action="connect.php">';	// Affectation
	
	connex= connex + '<div>';
	connex= connex +'<label for="pseudo"> Pseudo: </label>';
	connex=connex+ '<input type="text" id="pseudo" name="user_pseudo">';
	connex= connex+'</div>'; 
	
	
    connex=  connex + '<div>';
	connex=  connex + '<label  for="pass"> Mode de passe: </label>';
	connex=  connex + '<input type="password" id="pass" name= "user_passeword">';
	connex=  connex + '</div>'; 
	

	 connex= connex+ '<input type="submit" value="validez" name="submitconnexion"> ';
     connex= connex+ '</form>'; 
	 
	
	 document.getElementById('inscription').innerHTML=connex;  
}

if (Choix== 'inscription') {
	var inscrip = '<form  action="connect.php" method="get" >';

	// var inscrip = '<form onsubmit="connect.php">';
	inscrip=  inscrip + '<div>';
	inscrip=  inscrip + '<label  for="name"> Nom: </label>';
	inscrip=  inscrip + '<input type="text" id="name" name="user_name">';
	inscrip=  inscrip + '</div>'; 
	
	inscrip=  inscrip + '<div>';
	inscrip=  inscrip + '<label  for="prenom"> prenom: </label>';
	inscrip=  inscrip + '<input type="text" id="prenom" name= "user_prenom">';
	inscrip=  inscrip + '</div>'; 
	 
	 
	inscrip=  inscrip + '<div>';
	inscrip=  inscrip + '<label  for "pseudo"> Pseudo: </label>';
	inscrip=  inscrip + '<input type="text" id="pseudo" name= "user_pseudo">';
	inscrip=  inscrip + '</div>'; 
	
	
	inscrip=  inscrip + '<div>';
	inscrip=  inscrip + '<label  for "mail"> E_mail: </label>';
	inscrip=  inscrip + '<input type="text" id="mail" name= "user_mail">';
	inscrip=  inscrip + '</div>'; 
	


	inscrip=  inscrip + '<div>';
	inscrip=  inscrip + '<span> 8 Caractères,1 Majscule:</span>';
	inscrip=  inscrip + '</div>';


	inscrip=  inscrip + '<div>';
	inscrip=  inscrip + '<label  for "pass1"> Mot de passe: </label>';
	inscrip=  inscrip + '<input  type="password" onkeyup="verfifierMDP();" id="pass1" name= "user_passeword">';
	inscrip=  inscrip + '</div>'; 
	
	


	
	inscrip=  inscrip + '<div>';
	inscrip=  inscrip + '<label  for "pass2"> Mot de passe: </label>';
	inscrip=  inscrip + '<input type="password" id="pass2" name= "user_password">';
	inscrip=  inscrip + '</div>'; 
	
	 
	 
	 inscrip= inscrip+ '<input type="submit" value="validez" name="submitinscription"> ';
     inscrip= inscrip+ '</form>'; 
	 
	 document.getElementById('inscription').innerHTML=inscrip;  // affectation
	}



}
     
  

 function comparerMDP() { 
 
 var pass1=document.getElementById('pass1').value;
 var pass2=document.getElementById('pass2').value;

 if (pass1!=pass2) {

 alert ('les deux mots de passe sont différents')
return false;
  }

  else 
  {
    alert ('les deux mots de pass concordent')
     return true;

  }	


  
 
 }

 
  function verfifierMDP(){
	  
	   var compteurLettre=0; 
	   var compteurMaj=0; 
	   var compteurChiffre=0; 
	   var pass1=document.getElementById('pass1').value;
		for (var i=0; i<pass1.length; i++) {
			 var test=pass1.charAt(i);
				 if (test>='a' && test<='z');
				     {   
				     compteurLettre=compteurLettre+1;
				     }
				 
				 if (test>='A' && test<='Z');
				     {   
				     compteurMaj=compteurMaj+1;
				     
				     }
				 
				 if (test>='0' && test<='9');
				     {   
				     compteurLettre=compteurLettre+1;
				     }
	 
			if (compteurLettre>=6)
			{document.getElementById('couleurLettre').style.color="green";}

			if (compteurMaj>=1)
			{document.getElementById('couleurMaj').style.color="green";}

			if (compteurChiffre>=3)
			{document.getElementById('couleurChiffre').style.color="green";}
  }
}