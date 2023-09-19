<?php
session_start();


if (isset($_SESSION["username"]) && !empty($_SESSION["username"])) {
    echo "Bienvenue Monsiuer/Madame, " . $_SESSION["username"] . " " . $_SESSION['age'];
}
else{
    session_destroy();
    header("Location: index.html");
    exit();
}


if (isset($_POST['logout'])) {
    session_destroy();
    header("Location: index.html");
    exit();

}?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="./logout.php">
    <button type="submit" name="logout">Logout</button>
</a>
</body>
</html>