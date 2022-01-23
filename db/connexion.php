<?php
    /* Connect to a MySQL database using driver invocation */
    $con = 'mysql:dbname=tutoseu;host=192.168.68.63';
    $user = 'myuser';
    $password = 'monpassword';

    // initiate connection & manage error
    try {
        // echo "Connexion success!";
        $CONN = new PDO($con, $user, $password);

    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e -> getMessage();
    }