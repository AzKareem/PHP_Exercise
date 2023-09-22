<?php
include_once './components/headerAfterLogin.php';
require_once './db/db_connect.php';
if (isset($_SESSION['update_error'])) {
    echo '<div class="flex items-center p-4 mb-4 text-blue-800 text-center border-t-4 border-blue-300 bg-blue-50 dark:text-blue-400 dark:bg-gray-800 dark:border-blue-800" role="alert">';
    echo '<div class="text-sm font-medium">';
    echo $_SESSION['update_error'];
    echo '</div>';
    echo '</div>';
    unset($_SESSION['update_error']);
}

if (isset($_SESSION['delete_error'])) {
    echo '<div class="flex items-center p-4 mb-4 text-blue-800 text-center border-t-4 border-blue-300 bg-blue-50 dark:text-blue-400 dark:bg-gray-800 dark:border-blue-800" role="alert">';
    echo '<div class="text-sm font-medium">';
    echo $_SESSION['delete_error'];
    echo '</div>';
    echo '</div>';
    unset($_SESSION['delete_error']);
}
?>

<?php
$sql = $pdo->query("SELECT * FROM clients")->fetchall(PDO::FETCH_ASSOC);
?>

<form action="./deleteClient.php" method="post" id="item<?php echo $row['company_id']; ?>">
    <div class="container mx-auto mt-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <?php foreach ($sql as $row) : ?>
                <div class="p-6 rounded-lg shadow-lg text-white hover:bg-cyan-500 hover:text-white transition-transform transform hover:scale-105 bg-gradient-to-r from-purple-600 via-purple-500 to-teal-500" style="background: linear-gradient(60deg, rgba(84,58,183,1) 0%, rgba(0,172,193,1) 100%);">
                    <h2 class="text-2xl text-white font-bold mb-4"><i><?php echo $row['company_name']; ?></i></h2>
                    <p class="text-white"><i>Contact Person: <?php echo $row['contact_person']; ?></i></p>
                    <p class="text-white"><i>Phone: <?php echo $row['phone']; ?></i></p>
                    <p class="text-white"><i>Address: <?php echo $row['adress']; ?></i></p>
                    <p class="text-white"><i>Created By: <?php echo $row['created_by']; ?></i></p>
                    <p class="text-white"><i>Created At: <?php echo $row['created_at']; ?></i></p>
                    <p class="text-white mb-5"><i>Edited At: <?php echo $row['edited_at']; ?></i></p>
                    <a href="./updateClients.php?comp=<?= $row['company_id']; ?>" class="hover:bg-gray-700 font-sans ml-2 rounded-md px-2 py-1">Update Client</a>
                    <input type="hidden" name="company_id" value="<?= $row['company_id']; ?>">
                    <button type="submit" class="hover:bg-gray-700 font-sans ml-2 rounded-md px-2 py-1">Delete Client</button>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</form>
<?php
include_once './components/footer.php';
?>