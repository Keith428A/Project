<?php
require_once("dbcontact.php");

if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
}

if(isset($_POST['edit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    
    $sql = "UPDATE user SET name=?, email=?,message=? WHERE id=?";
    $stmt = $connect->prepare($sql);
    $stmt->bind_param("sssi", $name, $email, $message, $id);

    if ($stmt->execute()) {
        header("Location: ./display_contact.php");
    } else {
        echo "Error updating entry: " . $stmt->error;
    }

    $stmt->close();
}

$connect->close();
?>
