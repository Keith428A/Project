<?php
require_once("dbcontact.php");

$query = "INSERT INTO user (name, email, message) VALUES (?, ?, ?)";

if ($stmt = mysqli_prepare($connect, $query)) {
    
    mysqli_stmt_bind_param($stmt, "sss", $_POST["name"], $_POST["email"], 
 $_POST["message"]);

    if (mysqli_stmt_execute($stmt)) {
        header("Location:display_contact.php");
    } else {
        die("Execute failed: " . mysqli_error($connect));
    }

    mysqli_stmt_close($stmt); 
} else {
    die("Prepare failed: " . mysqli_error($connect));
}

mysqli_close($connect);
?>