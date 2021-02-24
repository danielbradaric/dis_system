<?php

include "connection.php";

$username = $_SESSION['username'];
$oldpass = $_POST['oldpassword'];
$newpass = $_POST['newpassword'];
$anewpass = $_POST['againnewpassword'];

$sql = "SELECT * FROM korisnici WHERE korisnicko_ime = '$username'";
$result = $mysqli->query($sql);

if($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $password = $row['lozinka'];

    if($oldpass==$password) {

        if($newpass==$anewpass) {
            $sql_update = "UPDATE korisnici SET lozinka = '$newpass' WHERE korisnicko_ime = '$username'";
            $result_update = $mysqli->query($sql_update);
            echo "Administratorska lozinka je uspješno promijenjena!";
            header('refresh:2;url=../index.php');
            session_destroy();

        } else {
            echo "Nove lozinke nisu iste, molimo Vas da ponovno unesete lozinku!";
            header('refresh:2;url=../system_actions/promjena_lozinke.php');
        }

    } else {
        echo "Lozinka nije točna, molimo Vas da ponovno unesete lozinku!";
        header('refresh:2;url=../system_actions/promjena_lozinke.php');
    }

} else {
    null;
}





