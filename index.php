<?php 
    include './components/header.php';
?>
<main>
    <section class="phpexercise">
    <form action="./process.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
    <button id="btn" class="submit">Submit </button>
    </form>
    </section>
<script src="php.js"></script>
</main>
</body>
</html>