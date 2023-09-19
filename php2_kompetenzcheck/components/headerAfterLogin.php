<?php
session_start();
if (isset($_SESSION['user_id']) && isset($_SESSION['name'])) {
    $user_id = $_SESSION['user_id'];
    $user_name = $_SESSION['name'];
} else {

    header("location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Customer Management</title>
</head>
<header>
    <div class="three">
        <h1>Customer Management System</h1>
    </div>

    <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./logout.php">Log out</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./displayClients.php">Display Clients</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./createClients.php">Create Clients</a>
        </li>
        <li class="nav-item">
            <a class="nav-link">Logged in as <?php echo $user_name; ?></a>
        </li>

    </ul>

</header>

<body>