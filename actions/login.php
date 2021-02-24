<?php
include "connection.php";

$username = $mysqli->real_escape_string(strip_tags($_POST['username']));
$password = $mysqli->real_escape_string(strip_tags($_POST['password']));

$sql = "SELECT * FROM korisnici WHERE korisnicko_ime = '$username' AND lozinka = '$password'";

$result = $mysqli->query($sql);


if($result->num_rows == 1) {
    $row = $result->fetch_assoc();

    $_SESSION['loggedIn'] = 1;
    $_SESSION['username'] = $row['korisnicko_ime'];
    $_SESSION['password'] = $row['lozinka'];
    header('location: ../admin_actions.php');

} else {
    header('location:../access_denied.php');
}