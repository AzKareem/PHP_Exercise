<?php
session_start();
$valid_username = "karim";
$valid_password = "1234567";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
    if (empty($_POST['username']) || empty($_POST['password'])) {
        echo "Benutzername und Passwort dürfen nicht leer sein.";
    } 
     else {
            $_SESSION["username"] = $_POST['username'];
            $_SESSION['age'] = 30;
            header("Location: dashboard.php");
            exit;
           
        }
}

?>






