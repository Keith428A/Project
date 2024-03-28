<?php
    $server ='localhost';
    $user ='root';
    $password ='';
    $name ='contact';
    
    $connect = mysqli_connect($server, $user, $password, $name);
    $stmt =("");
    
    if (!$connect) {
    die("Connection Failed:" . mysqli_connect_error());    
    }
    
    else{
        echo "Connection Successfull";
    }
    

?>