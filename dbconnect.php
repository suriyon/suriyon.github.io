<?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PWD', 'root');
    define('DB', 'testdb');
    
    $con = mysqli_connect(HOST, USER, PWD, DB) or die('Unable to Connect DB');
    mysqli_set_charset($con, 'utf8');
?>