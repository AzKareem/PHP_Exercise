<?php
include_once './components/header.php';
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