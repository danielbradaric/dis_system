<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "jasamadministrator";
$dbname = "dis_system";

$mysqli = new mysqli($servername, $username, $password, $dbname);

if($mysqli->connect_error) {
    die("Pogreška u komunikaciji sa bazom podataka" . $mysqli->connect_error);
}

?>

