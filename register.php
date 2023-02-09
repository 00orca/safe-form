<?php
include 'connect.php';
// if username and password are set

if (isset($_POST["username"]) && isset($_POST["password"]) && $_POST["username"] != "" && $_POST["password"] != "") {
  if (isset($_POST["signup"])) {
    global $conn;

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['username']);

    // check for password strength
    if (strlen($password) < 8) {
      $message = "<div class='error'> Mot de passe trop court </div>";
      header("Location: registration.php?message=$message");
      exit;
    }

    // check field for sql injection



    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert the user into the database
    // (Assuming you have a database connection set up)

    // connect to db and add user
    $stmt = mysqli_prepare($conn, "INSERT INTO user (username, password) VALUES (?, ?)");
    mysqli_stmt_bind_param($stmt, "ss", $username, $hashedPassword);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    if (mysqli_affected_rows($conn) > 0) {
      // Login successful
      $message = "<div class='success'> Compte créé </div>";
      header("Location: index.php?message=$message");
      exit();
    }

    exit;
  }
} else {
  $message = "<div class='error'> Nom d'utilisateur et/ou mot de passe non renseignés </div>";
  header("Location: registration.php?message=$message");
}
?>