<?php

function lastactivity()
{
    include "connection.php";

    $date = date("Y/m/d/h/m/s");
    $user = $_SESSION['username'];

    $sql = "UPDATE korisnici SET zadnja_aktivnost = '$date' WHERE korisnicko_ime = '$user'";
    $result = $mysqli->query($sql);
}

lastactivity();

session_destroy();

header('location:../index.php');