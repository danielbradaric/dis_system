<?php

include "connection.php";

$sql = "DELETE FROM registracijske_oznake WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($mysqli, $sql)) {
    echo "Automobil je uspješno obrisan!";
    header('refresh:2;url=../system_actions/registracijske_oznake.php');
} else {
    echo "Greška: " . mysqli_error($mysqli);
}
mysqli_close($mysqli);
?>