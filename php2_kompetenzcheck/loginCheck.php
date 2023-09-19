<?php
include_once './components/header.php';
require_once './db/db_connect.php';
session_start();



if ($_POST['email'] != "" || $_POST['password'] != "") {
    $email = $_POST['email'];
    $password = $_POST['password'];


    $sql = "SELECT user_id, name FROM `users` WHERE `email`=? AND `password`=? ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email, $password]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['name'] = $user['name'];

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
