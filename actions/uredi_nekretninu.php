<?php
include "connection.php";

$id = $_POST['id'];
$vrsta = $_POST['vrsta'];
$adresa = $_POST['adresa'];
$grad = $_POST['grad'];
$vlasnik = $_POST['vlasnik'];
$kc = $_POST['kc'];
$napomena = $_POST['napomena'];

$sql = "UPDATE nekretnine SET vrsta='$vrsta', adresa='$adresa', grad='$grad', vlasnik='$vlasnik', kc='$kc', napomena='$napomena' WHERE id='$id'";

if ($mysqli->query($sql) === TRUE) {
    echo "Podaci o nekretnini su uspješno ažurirani!";
    header('refresh:2;url=../system_actions/nekretnine.php');
} else {
    echo "Greška prilikom ažuriranja podataka o nekretnini:" . $mysqli->error;
}

$mysqli->close();
