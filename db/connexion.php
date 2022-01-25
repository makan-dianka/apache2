<?php
    /* Connect to a MySQL database using driver invocation */
    $con = 'mysql:dbname=tutoseu;host=192.168.68.63'; //beweb 192.168.1.86';
    $user = 'myuser';
    $password = 'monpassword';

    // initiate connection & manage error
    try {
        // echo "Connexion success!";
        $CONN = new PDO($con, $user, $password);
        $log = 'Connecté au base des données avec succès';
        logger($log);

    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e -> getMessage();
    
        $log = " Connexion echoué au base de données. | ". $e -> getMessage();
        logger($log);
    }