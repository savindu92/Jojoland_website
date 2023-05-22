<?php

session_start();

if (!isset($_SESSION['loggedin'])) {
	header('Location: ../pages/login.html');
	exit;
}

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'phplogin';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$stmt = $con->prepare('SELECT password, email FROM accounts WHERE id = ?');

$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();
?>

<!DOCTYPE html>
<html  lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
        <li><a href="home.php">Home Page</a></li>
        <li><a href="../myapp/logout.php">Logout</a></li>
      </ul>

    </nav> 
    
	  <div class="second-contenair">
      
      <div class="sub-centerblock">

        <h1>Profile Page</h1>
        
        <h2>Vos informations:</h2>
        
        <div class="overflow">
          <table>
            <tr>          
            </td>
              <td>Nom d'utilisateur:</td>
              <td><?=$_SESSION['name']?></td>
            </tr>
            <tr>
              <td>Mot de passe:</td>
              <td><?=$password?></td>
            </tr>
            <tr>
              <td>Email:</td>
              <td><?=$email?></td>
            </tr>
          </table>
        </div>
        
      </div>

    </div>
    

  </body>

</html>