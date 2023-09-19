<?php
include_once './components/header.php';
require_once './db/db_connect.php';

if ($_POST['email'] != "" || $_POST['password'] != "") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `users` WHERE `email`=? AND `password`=? ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email, $password]);
    $row = $stmt->rowCount();

    if ($row > 0) {

        header("location: dashboard.php");
        exit;
    } else {
        echo "Invalid username or password";
        header("location: index.php");
        exit;
    }
} else {
    echo "Invalid input";
}

include_once './components/footer.php';