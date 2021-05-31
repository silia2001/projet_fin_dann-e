function profil (Choix) {
	


	if (Choix == '$login') {
	var connex  = '<form method="post" action="profil.php">'; 
	
	
	var login = '<form onsubmit=" return comparerMDP()">';
	login=  login + '<div>';
	login=  login + '<label  for="name"> Nom: </label>';
    connex=connex+ '<input type="text" id="pseudo" name="user_pseudo">';
	login=  login + '</div>'; 
	
	login=  login + '<div>';
	login=  login + '<label  for="prenom"> prenom: </label>';
	login=  login + '<input type="text" id="prenom" name= "user_prenom">';
	login=  login + '</div>'; 
	 
	 
	login=  login + '<div>';
	login=  login + '<label  for "pseudo"> Pseudo: </label>';
	login= login + '<input type="text" id="pseudo" name= "user_pseudo">';
	login=  login + '</div>'; 
	
	
	login=  login + '<div>';
	login=  login + '<label  for "mail"> E_mail: </label>';
	inscrip=  inscrip + '<input type="text" id="mail" name= "user_mail">';
	inscrip=  inscrip + '</div>'; 
	
	inscrip=  inscrip + '<div>';
	inscrip=  inscrip + '<label  for "pass1"> Mot de passe: </label>';
	inscrip=  inscrip + '<input  type="password" onkeyup="verfifierMDP();" id="pass1" name= "user_passeword">';
	inscrip=  inscrip + '</div>'; 
	
	
	inscrip=  inscrip + '<div>';
	inscrip=  inscrip + '<span> 6 lettres, 1 Majscule, 3 chiffre: </span>';
	inscrip=  inscrip + '</div>';


	
	inscrip=  inscrip + '<div>';
	inscrip=  inscrip + '<label  for "pass2"> Mot de passe: </label>';
	inscrip=  inscrip + '<input type="password" id="pass2" name= "user_password">';
	inscrip=  inscrip + '</div>'; 


}









