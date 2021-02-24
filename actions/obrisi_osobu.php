<?php

include "connection.php";

$sql = "DELETE FROM popis_osoba WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($mysqli, $sql)) {
    echo "Osoba je uspješno obrisana";
    header('refresh:2;url=../system_actions/popis_osoba.php');
} else {
    echo "Greška: " . mysqli_error($mysqli);
}
mysqli_close($mysqli);
?>

