<?php
include "connection.php";

$registracijska_oznaka = $_POST['registracijska_oznaka'];
$marka = $_POST['marka'];
$model = $_POST['model'];
$vlasnik = $_POST['vlasnik'];
$napomena = $_POST['napomena'];

$sql = "INSERT INTO registracijske_oznake (registracijska_oznaka, marka, model, vlasnik, napomena) VALUES ('$registracijska_oznaka', '$marka', '$model', '$vlasnik', '$napomena')";

if($mysqli->query($sql) === TRUE) {
    echo "Automobil je uspješno unesen!";
    header('refresh:2;url=../system_actions/registracijske_oznake.php');
} else {
    echo "Greška prilikom unosa automobila u bazu podataka" . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();