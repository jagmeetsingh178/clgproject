<?php

    $host = "localhost";
    $username = "root";
    $password = "";

    // Creating the connection
    $connection = mysqli_connect($servername, $username, $password);

    // Checking the connection
    if ($connection == true) {
        echo("Database Connected");
    } else {
        echo("Databse Not Connected");
    }

?>