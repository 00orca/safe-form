<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>Connect</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link rel="stylesheet" href="style.css">
    </head>
    <body>
      <form action="login.php" method="post" style="float:right;">
        <h3>Connexion</h3>
        
        <label for="username">Nom d'utilisateur:</label>
        <input type="text" id="username" placeholder="Nom d'utilisateur" name="username">
        
        <label for="password">Mot de passe:</label>
        <input type="password" id="password" placeholder="Mot de passe" name="password">
        <br>
        <input type="submit" name="signin" value="Se connecter">
        <?php
          if(isset($message)) {
            echo $message;
          }
        ?>
        <!-- button linking to index.php -->
        <a href="registration.php" class="button">S'inscrire</a>
        <!-- if connexion fails get message form login.php -->
        <?php
          if(isset($_GET["message"])) {
            echo $_GET["message"];
          }
        ?>
      </form>
    </body>
  </html>
    