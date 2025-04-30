<?php

$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'informationsystem';
$port = 3307;

$con = new mysqli($host, $user, $password, $dbname, $port);

if ($con->connect_error){
    echo $con->connect_error;
}


?>