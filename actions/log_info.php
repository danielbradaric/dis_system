<?php
include "connection.php";

$ip = $_POST['ip'];
$date = $_POST['date'];

$sql = "INSERT INTO log_info (ip, datum) VALUES ('$ip', '$date')";


if($mysqli->query($sql) === TRUE) {
    header('location:../access-denied.php');
} else {
    echo "Pogreška: sada vas nismo uhvatili, ali naći ćemo vas. ";
    echo "Preusmjeravanje...";
    echo $mysqli->error;
    header('refresh:4; url=../access_denied.php');
}

$mysqli->close();



