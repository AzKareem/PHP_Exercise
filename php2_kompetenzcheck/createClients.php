<?php
include_once './components/headerAfterLogin.php';
?>
<main>
    <form action="./createClientsCheck.php" method="post">
        <div class="container">
            <h2>Add Clients</h2>
            <label for="company_name" class="form-label">Company Name</label>
            <input name="company_name" type="text" class="form-control" id="company_name">

            <label for="contact_person" class="form-label">Contact Person</label>
            <input name="contact_person" type="text" class="form-control" id="contact_person">

            <label for="phone" class="form-label">Phone</label>
            <input name="phone" type="text" class="form-control" id="phone">

            <label for="adress" class="form-label">Adress</label>
            <input name="adress" type="text" class="form-control" id="adress">



            <label for="created_at" class="form-label">Created at</label>
            <input name="created_at" type="date" class="form-control" id="created_at">

            <label for="edited_at" class="form-label">Edited at</label>
            <input name="edited_at" type="date" class="form-control" id="edited_at">
            <br>
            <button type="submit" class="btn btn-primary" href="./authentifications/createClientsCheck.php">Add</button>

        </div>
    </form>
</main>
<?php
include_once './components/footer.php';
?>