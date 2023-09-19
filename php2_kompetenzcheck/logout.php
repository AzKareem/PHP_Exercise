<?php
include_once './components/headerAfterLogin.php';
require_once './db/db_connect.php';
session_destroy();
header("location: displayClients.php");
exit;
?>



<?php
include_once './components/footer.php';
?>