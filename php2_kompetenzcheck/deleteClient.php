<?php
include_once './components/headerAfterLogin.php';
require_once './db/db_connect.php';




if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $company_id = $_POST['company_id'];
    $stmt = $pdo->prepare("SELECT created_by FROM clients WHERE company_id = ?");
    $stmt->execute([$company_id]);
    $client = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($client['created_by'] == $_SESSION['user_id']) {

        $stmt = $pdo->prepare("DELETE FROM clients WHERE company_id = ?");
        $stmt->execute([$company_id]);
        header("Location: displayClients.php");
        exit();
    } else {

        $_SESSION['delete_error'] = "You are not allowed to delete it";
        header("Location: displayClients.php");
        exit();
    }
} else {

    echo "Invalid request.";
}
