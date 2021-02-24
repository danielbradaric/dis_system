<?php


include "connection.php";

$sql = "DELETE FROM nekretnine WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($mysqli, $sql)) {
    echo "Nekretnina je uspješno obrisana!";
    header('refresh:2;url=../system_actions/nekretnine.php');
} else {
    echo "Greška: " . mysqli_error($mysqli);
}
mysqli_close($mysqli);
