<?php
 include './header.php';
session_start();
$_SESSION['username'] = 'Karim';
$_SESSION["email"] = "Karim-azimi@hotmail.com";
echo "Die Werte wurden in der Session gespeichert. Username: " . $_SESSION['username'] . ", E-Mail: " . $_SESSION["email"];

?>
  
</body>
</html>