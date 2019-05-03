<?php

$host = "localhost";
$username = "root";
$password = "";
$db_name = "expedia_database";

$db = mysqli_connect($host, $username, $password, $db_name);
$connection_error = $db->connect_error;
if ($connection_error != null)
{
    echo 'Error!';
    /*include('../errors/db_error_connect.php');
    exit();*/
}

