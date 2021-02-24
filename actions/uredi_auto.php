<?php
include "connection.php";

$id = $_POST['id'];
$registracijska_oznaka = $_POST['registracijska_oznaka'];
$marka = $_POST['marka'];
$model = $_POST['model'];
$vlasnik = $_POST['vlasnik'];
$napomena = $_POST['napomena'];

$sql = "UPDATE registracijske_oznake SET registracijska_oznaka='$registracijska_oznaka', marka='$marka', model='$model', vlasnik='$vlasnik', napomena='$napomena' WHERE id = $id";

if ($mysqli->query($sql) === TRUE) {
    echo "Podaci o automobilu su uspješno ažurirani!";
    header('refresh:2;url=../system_actions/registracijske_oznake.php');
} else {
    echo "Pogreška prilikom ažuriranja podataka o automobilu:" . $mysqli->error;
}

$mysqli->close();
