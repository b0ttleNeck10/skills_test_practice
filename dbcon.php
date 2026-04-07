<?php
    $HOST = "localhost";
    $NAME = "root";
    $PASSWORD = "p4ssw0rd";

    $con = new mysqli($HOST, $NAME, $PASSWORD);

    if ($con->connect_error) {
        die('Failed to connect to database: ' . $con->connect_error);
    }
?>