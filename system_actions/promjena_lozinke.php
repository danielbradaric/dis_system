<?php
$naslov = "Promjena lozinke";
include "../header.php";

?>

<style>
    <?php include "../css/header-style.css"; ?>
</style>

<link rel="stylesheet" href="../css/password_change.css">

<form action="../actions/password_change.php" method="post" class="pc_form">
    <h1>Promjena lozinke admimistratorskog računa</h1>
    <input name="oldpassword" type="password" placeholder="Unesite staru lozinku">
    <input name="newpassword" type="password" placeholder="Unesite novu lozinku">
    <input name="againnewpassword" type="password" placeholder="Ponovno unesite novu lozinku"><br>
    <button type="submit">Promijeni lozinku</button>
</form>
