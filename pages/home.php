<?php

session_start();

if (!isset($_SESSION['loggedin'])) {
	header('Location: login.html');
	exit;
}
?>

<!DOCTYPE html>
<html  lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="../css/articles.css">
    <link rel="stylesheet" href="../css/nav_bar.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@800&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Merriweather&family=Oswald&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&family=Work+Sans&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>

    <nav>

      <input type="checkbox" id="check">

      <label for="check" class="check-btn">
        <i class="fa fa-bars"></i> 
      </label>

      <label class="logo">Jojoland</label>

      <ul>
        <li><a class="active" href="../index.html">Accueil</a></li>
        <li><a href="login.html">Compte</a></li>
        <li><a href="profile.php">Profile</a></li>
        <li><a href="../myapp/logout.php">Logout</a></li>
      </ul>

    </nav> 
    
	  <div class="second-contenair">
      
      <div class="sub-centerblock">

        <h1>Home Page</h1>

        <p>Salut <?=$_SESSION['name']?>! J'espère que mon site web te plaît et j'espère que tu passes un bon moment !</p>
      

      </div>
      
      
      

    </div>
    

  </body>

</html>