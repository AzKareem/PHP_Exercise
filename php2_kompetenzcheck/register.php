<?php
include_once './components/header.php';
?>
<main>
  <form action="./registerCheck.php" method="post">
    <div class="container">
      <h2>Register</h2>
      <p>Please fill in this form to create an account.</p>

      <label for="name" class="form-label">Name</label>
      <input name="name" type="text" class="form-control" id="name">

      <label for="email" class="form-label">Email</label>
      <input name="email" type="email" class="form-control" id="email">

      <label for="password" class="form-label">Password</label>
      <input name="password" type="password" class="form-control" id="password">

      <label for="password" class="form-label">Repeat Password</label>
      <input type="password" class="form-control" id="password">

      <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
      <button type="submit" class="btn btn-primary" href="./registerCheck">Register</button>
    </div>

    <div class="container signin">
      <p>Already have an account? <a href="./login.php">Sign in</a>.</p>
    </div>
  </form>
</main>
<?php
include_once './components/footer.php';
?>