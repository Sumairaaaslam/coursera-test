<?php
    $servername = "localhost";
    $username = "sqluser";
    $password = "sqlpass";
    $dbaname = "notes";
    $conn =mysqli_connect($servername,$username,$password,$dbaname);
    if (!$conn){
        die("Connection failed" .mysql_connect_error());

    }


?>