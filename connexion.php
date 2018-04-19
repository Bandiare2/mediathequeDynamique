<!DOCTYPE html>
<html>
<head>
	<title>CONNEXION</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css" />
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
          <a class="nav-link" href="index.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="video.php">VIDEOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="avis.php">AVIS</a>
        </li>
         
         
        
      </ul>
    </div>
  </nav>

<div id="formulaire1">

  <form  action = "video.php" class="px-4 py-3">
    <div class="form-group">
      <h3><b><label for="exampleDropdownFormEmail1">Email address</label></b></h3>
      <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
    </div>
    <div class="form-group">
       <h3><b> <label for="exampleDropdownFormPassword1">Password</label></b></h3>
      <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
    </div>
    <div class="form-check">
      <input type="checkbox" class="form-check-input" id="dropdownCheck">
      <h3><b><label class="form-check-label" for="dropdownCheck">
        Remember me
      </label></b></h3>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
  </form>
  </div>
</body>
</html>

    