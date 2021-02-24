<?php
include "connection.php";

$vrsta = $_POST['vrsta'];
$adresa = $_POST['adresa'];
$grad = $_POST['grad'];
$vlasnik = $_POST['vlasnik'];
$kc = $_POST['kc'];
$napomena = $_POST['napomena'];

$sql = "INSERT INTO nekretnine (vrsta, adresa, grad, vlasnik, kc, napomena) VALUES ('$vrsta', '$adresa', '$grad', '$vlasnik', '$kc', '$napomena')";

if($mysqli->query($sql) === TRUE) {
    echo "Nekretnina je uspješno unesena!";
    header('refresh:2;url=../system_actions/nekretnine.php');
} else {
    echo "Greška prilikom unosa nekretnine u bazu podataka!" . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();