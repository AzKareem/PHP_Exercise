<?php
include_once './components/header.php';
require_once './db/db_connect.php';



if (isset($_POST['company_id'])) {
    $company_id = intval($_POST['company_id']);
    $company_name = $_POST['company_name'];
    $contact_person = $_POST['contact_person'];
    $phone = intval($_POST['phone']);
    $adress = $_POST['adress'];
    $created_by = intval($_POST['created_by']);
    $created_at = $_POST['created_at'];
    $edited_at = $_POST['edited_at'];



    $sql = "UPDATE clients SET company_name=:company_name, contact_person=:contact_person, phone=:phone, adress=:adress, created_by=:created_by, created_at=:created_at, edited_at=:edited_at WHERE company_id=:company_id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':company_name', $company_name);
    $stmt->bindParam(':contact_person', $contact_person);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':adress', $adress);
    $stmt->bindParam(':created_by', $created_by);
    $stmt->bindParam(':created_at', $created_at);
    $stmt->bindParam(':edited_at', $edited_at);
    $stmt->bindParam(':company_id', $company_id);

    if ($stmt->execute()) {

        header("location: displayClients.php");
        exit;
    } else {

        echo "Update failed. Please check your input.";
    }
}




?>
<?php
include_once './components/footer.php';
?>