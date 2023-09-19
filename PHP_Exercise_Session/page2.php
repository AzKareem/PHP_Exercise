<?php
 include './header.php';
session_start();
$username = $_SESSION['username'];
$email = $_SESSION['email'];
echo "Username: " . $_SESSION['username'] . ", E-Mail: " . $_SESSION["email"];

?>
  
</body>
</html>