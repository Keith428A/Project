<?php

if(isset($_POST['id']) && !empty($_POST['id'])) {
    
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    
    
    require_once("dbcontact.php");

    
    $sql = "DELETE FROM user WHERE id = ?";
    
    
    if($stmt = $connect->prepare($sql)) {
        $stmt->bind_param("i", $id);
        
        
        if($stmt->execute()) {
            
            http_response_code(200);
            echo "Entry deleted successfully";
        } else {
            
            http_response_code(500);
            echo "Error deleting entry: " . $stmt->error;
        }

        
        $stmt->close();
    } else {
        
        http_response_code(500);
        echo "Error preparing statement: " . $connect->error;
    }
    
    
    $connect->close();
} else {
    
    http_response_code(400);
    echo "Bad request: ID parameter is missing or empty";
}
?>
