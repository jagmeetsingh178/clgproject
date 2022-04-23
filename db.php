<?php
    $con = mysqli_connect('localhost', 'root', '', 'project');
    if($con) {
        echo "Connected successfully";
    } else {
        echo "Not connected";
        die();
    }
