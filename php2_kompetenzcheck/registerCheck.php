<?php
include_once './components/header.php';
require_once './db/db_connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];


$sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
$stmt = $pdo->prepare($sql);
$stmt->execute([$name, $email, $password]);
header("location: index.php");
exit;
?>
<?php
include_once './components/footer.php';
?>

