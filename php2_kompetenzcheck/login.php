<?php
include_once './components/header.php';
require_once './db/db_connect.php';
session_start();


if (isset($_SESSION['login_error'])) {
    echo '<div class="alert alert-danger">' . $_SESSION['login_error'] . '</div>';
    unset($_SESSION['login_error']);
}

?>
<main>
    <form action="./loginCheck.php" method="post">
        <div class="container">
            <h2>Login</h2>
            <label for="email" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" id="email">

            <label for="password" class="form-label">Password</label>
            <input name="password" type="password" class="form-control" id="password">
            <br>
            <button type="submit" class="btn btn-primary" href="./loginCheck">Log in</button>
            <div class="container signin">
                <p>Dont have an account? <a href="./register.php">Register Now</a>.</p>
            </div>
        </div>

    </form>
</main>




<?php
include_once './components/footer.php';
?>