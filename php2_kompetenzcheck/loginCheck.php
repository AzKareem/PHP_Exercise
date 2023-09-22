<?php
require_once './db/db_connect.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT user_id, name, password FROM `users` WHERE `email`=?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        // Password is correct
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['name'] = $user['name'];

        header("location: dashboard.php");
        exit;
    } else {
        // Invalid Email or Password
        $_SESSION['login_error'] = "Invalid Email or Password. Please try again.";
        header("Location: login.php");
        exit;
    }
}

include_once './components/footer.php';
