<?php
include_once './components/header.php';
require_once './db/db_connect.php';

?>

<?php
$sql = $pdo->query("SELECT * FROM clients")->fetchall(PDO::FETCH_ASSOC);
?>
<main>
    <?php
    foreach ($sql as $row) : ?>

        <form action="./deleteClient.php" method="post" id="item<?php echo $row['company_id']; ?>">
            <div class="card" style="width: 18rem;">
                <div class="card-body">

                    <h2><i><?php echo $row['company_name']; ?></i></h2>
                    <p><i>Contact Person: <?php echo $row['contact_person']; ?></i></p>
                    <p><i>Phone: <?php echo $row['phone']; ?></i></p>
                    <p><i>Address: <?php echo $row['adress']; ?></i></p>
                    <p><i>Created By: <?php echo $row['created_by']; ?></i></p>
                    <p><i>Created At: <?php echo $row['created_at']; ?></i></p>
                    <p><i>Edited At: <?php echo $row['edited_at']; ?></i></p>
                </div>
                <div class="card-body">
                    <a href="./updateClients.php?comp=<?= $row['company_id']; ?>" class="btn btn-primary">Update Client</a>
                    <input type="hidden" name="company_id" value="<?php echo $company_id ?>">
                    <button type="submit" class="btn btn-primary">Delete Client</button>

                </div>
            </div>
        </form>
    <?php endforeach; ?>
</main>


<?php
include_once './components/footer.php';
?>