<?php
    function logger($log) {

        if (!file_exists('event.log')) {

            file_put_contents('event.log', '');
        }

        $ip = $_SERVER['REMOTE_ADDR']; // adresse ip de client
        $date = date('d/m/y h:iA', time());

        $contents = file_get_contents('event.log');
        $contents .= "[{$ip}]\t{$date}\t{$log}\r";   

        file_put_contents('event.log', $contents);

    }
?>