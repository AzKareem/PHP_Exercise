<?php
include_once './components/headerAfterLogin.php';
require_once './db/db_connect.php';



if (isset($_GET['comp'])) {
    $company_id = $_GET['comp'];

    $stmt = $pdo->prepare("SELECT * FROM clients WHERE company_id = ?");
    $stmt->execute([$company_id]);
    $clientData = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($clientData) {
        $company_name = $clientData['company_name'];
        $contact_person = $clientData['contact_person'];
        $phone = $clientData['phone'];
        $adress = $clientData['adress'];
        $created_by = $clientData['created_by'];
        $created_at = $clientData['created_at'];
        $edited_at = $clientData['edited_at'];
    }
}
?>

<main>

    <form action="./updateClientsCheck.php" method="post">
        <div class="container">
            <h2>Update Clients</h2>
            <label for="company_name" class="form-label">Company Name</label>
            <input name="company_name" type="text" class="form-control" id="company_name" value="<?= $company_name ?>">

            <label for="contact_person" class="form-label">Contact Person</label>
            <input name="contact_person" type="text" class="form-control" id="contact_person" value="<?= $contact_person ?>">

            <label for="phone" class="form-label">Phone</label>
            <input name="phone" type="text" class="form-control" id="phone" value="<?= $phone ?>">

            <label for="adress" class="form-label">Adress</label>
            <input name="adress" type="text" class="form-control" id="adress" value="<?= $adress ?>">

            <label for="created_by" class="form-label">Created by</label>
            <input name="created_by" type="text" class="form-control" id="created_by" value="<?= $created_by ?>">

            <label for="created_at" class="form-label">Created at</label>
            <input name="created_at" type="date" class="form-control" id="created_at" value="<?= $created_at ?>">

            <label for="edited_at" class="form-label">Edited at</label>
            <input name="edited_at" type="date" class="form-control" id="edited_at" value="<?= $edited_at ?>">
            <br>
            <input type="hidden" name="company_id" value="<?= $company_id ?>">
            <button name="updateButton" type="submit" class="btn btn-primary" href="./updateClientsCheck.php">Update</button>

        </div>
    </form>
</main>
<?php
include_once './components/footer.php';
?>