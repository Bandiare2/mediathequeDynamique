<!DOCTYPE html>
<html>
<head>
	<title>INSCRIPTION</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body style="background-image: url(image12.jpg);">
<nav class="navbar navbar-expand-lg  navbar-dark bg-primary">
	  <a class="navbar-brand" href="#">MediaTech</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      
	      <li class="nav-item">
	        <a class="nav-link" href="inscription.php">Inscription</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="connexion.php">Connexion</a>
	      </li>
	       
	      
	    </ul>
	  </div>
	</nav>

<div class="formulaire"> 
	<form action="connexion.php" method="post">

		<h3><b><label> Username</label><br>
		<input type="text" name="Username" class="inp"><br>
			
		<h3><b><label> mail</label></b></h3>
		<input type="email" name="mail" class="inp"><br>

		<h3><b><label> Password</label></b></h3>
		<input type="password" name="mdp" class="inp"><br>

		<h3><b><label>Repeatpassword</label></b></h3>
		<input type="password" name="mdp1" class="inp"><br>

		<input type="submit" value="S'incrire" name="S'inscrire" class="inp">

	</form>
</div>




</body>
</html>

<?php
	Include 'fonctions.php';
	if(isset($_POST['index_user']))
={
$username=htmlentities(trim($_POST['username']));
	
$password=htmlentities(trim($_POST['passeword']));
$repeatpassword=htmlentities(trim($_POST['repeatpassword']));


	if($username&&$password&&$repeatpassword)
	={

	}else echo"Veuillez saisir tous les champs";
}

?>