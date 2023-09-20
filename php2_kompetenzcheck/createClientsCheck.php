<?php
session_start();
require_once './db/db_connect.php';


$company_name = $_POST['company_name'];
$contact_person = $_POST['contact_person'];
$phone = $_POST['phone'];
$adress = $_POST['adress'];
$created_by = $_SESSION['user_id'];
$created_at = $_POST['created_at'];
$edited_at = $_POST['edited_at'];


$sql = "INSERT INTO clients (company_name, contact_person, phone, adress, created_by, created_at, edited_at) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$company_name, $contact_person, $phone, $adress, $created_by, $created_at, $edited_at]);
header("location: displayClients.php");
exit;
?>
<?php
include_once './components/footer.php';
?>

