<?php
include_once './components/headerAfterLogin.php';


if (isset($_SESSION['user_id']) && isset($_SESSION['name'])) {
    $user_id = $_SESSION['user_id'];
    $user_name = $_SESSION['name'];
} else {

    header("location: index.php");
    exit;
}
?>
<main class="welcomeText">
    <h1>Hello, dear <?php echo $user_name; ?>!</h1>
    <p>We're thrilled to have you as a part of our online community.</p>
    <p>Explore our website to discover a wide range of exciting features and content.</p>
    <p>If you have any questions or need assistance, feel free to <a href="contact.php">contact us</a>.</p>
    <p>Enjoy your stay and have a wonderful day!</p>
</main>

<?php
include_once './components/footer.php';
?>