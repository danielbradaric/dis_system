<?php
include "connection.php";

$user = $_SESSION['username'];

$sql_la = "SELECT * FROM korisnici WHERE korisnicko_ime = '$user'";
$result_la = $mysqli->query($sql_la);

while($row = $result_la->fetch_assoc()) {
    $lastactivity = $row['zadnja_aktivnost'];
}

$sql_n = "SELECT * FROM log_info";
$result_n = $mysqli->query($sql_n);

while($row_n = $result_n->fetch_assoc()) {

}




