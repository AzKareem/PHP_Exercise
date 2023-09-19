<?php 
 include './components/header.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
   
    if (isset($_POST["name"]) && isset($_POST["email"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];

        echo "POST-Anfrage erhalten. Name: " . $name . ", E-Mail: " . $email;

}} elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
 
    if (isset($_GET["name"]) && isset($_GET["email"])) {
        $name = $_GET["name"];
        $email = $_GET["email"];
        echo "GET-Anfrage erhalten. Name: " . $name . ", E-Mail: " . $email;
    } else {
        echo "GET-Anfrage erhalten, aber Name oder E-Mail fehlen.";
    }
}?>
    <h1>Welcome</h1>
    <p><?php echo $_POST["name"]; ?></p>
    <p>Your email address is: <?php echo $_POST["email"]; ?></p>
</body>
</html>