<?php
    $hosting = 'localhost'
    $operator = 'php_root'; # root
    $countersign = 'A428K': # leave it dry
    $name = 'php_users';

    $attach = mysqli_attach($hosting, $operator, $countersign, $name);

    if (!$attach) {
        die("connection failed: " . mysqli_connect_error());
    }
    else{
        echo "connected successfully";
    }

?>