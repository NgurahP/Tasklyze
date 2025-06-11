<?php
    $username = "root";
    $pass = "";
    $host = "localhost";
    $database = "db_tasklyze";

    $conn = mysqli_connect($host, $username, $pass, $database);

    if (!$conn){
        echo "database tidak terhubung";
    }else{
        echo "database terhubung";
    }
?>