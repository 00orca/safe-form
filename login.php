<?php
include 'connect.php';
// if username and password are set
if (isset($_POST["username"]) && isset($_POST["password"]) && $_POST["username"] != "" && $_POST["password"] != "") {
    if(isset($_POST["signin"])) {
        global $conn;

        $username = trim(htmlspecialchars($_POST["username"]));
        $password = trim(htmlspecialchars($_POST["password"]));

    // connect to db and check user
        $stmt = mysqli_prepare($conn, "SELECT * FROM user WHERE username = ? AND password = ?");
        mysqli_stmt_bind_param($stmt, "ss", $username, $password);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if (mysqli_num_rows($result) > 0) {
            // Login successful
            header("Location: admin.php");
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
            exit;
        } else {
            $message = "<div class='error'> Nom d'utilisateur ou mot de passe faux </div>";
            header("Location: index.php?message=$message");
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
            exit;
        }
    }
} else {
    $message = "<div class='error'> Nom d'utilisateur et/ou mot de passe non renseignés </div>";
    header("Location: index.php?message=$message");
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    exit;
}
?>