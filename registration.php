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
      <form action="register.php" method="post" style="float:left;">
        <h3>Creer un compte</h3>
        
        <label for="username">Nom d'utilisateur:</label>
        <input type="text" id="username" placeholder="Nom d'utilisateur" name="username">
        
        <label for="password">Mot de passe:</label>
        <input type="password" id="password" placeholder="Mot de passe" name="password">
        <br>
        <input type="submit" name="signup" value="Creer un compte">
        <?php
          if(isset($_GET["message"])) {
            echo $_GET["message"];
          }
        ?>
        <!-- button linking to index.php -->
        <a href="index.php" class="button">Retourner a la page de connexion</a>
      </form>
    </body>
  </html>
    