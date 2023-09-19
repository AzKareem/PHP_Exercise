<?php
include_once './components/header.php';
require_once './db/db_connect.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['company_id'])) {
        $company_id = $_POST['company_id'];
        $stmt = $pdo->prepare("DELETE FROM clients WHERE company_id = ?");
        $stmt->execute([$company_id]);
        header("Location: displayClients.php");
        exit();
    } else {
        echo "No company_id provided for deletion.";
    }
} else {
    echo "Invalid request.";
}
