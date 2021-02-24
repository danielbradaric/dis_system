<?php
$naslov = "Unos novog automobila";
include "../header.php";
include "../actions/please_login.php";
?>

<style>
    <?php include "../css/header-style.css"?>
</style>

<link rel="stylesheet" href="../css/novi-auto.css">


<form action="../actions/novi-auto.php" method="POST" autocomplete="off">
    <h1>Unos novog automobila</h1>
    <input type="text" name="registracijska_oznaka" placeholder="Registracijska oznaka" required>
    <input type="text" name="marka" placeholder="Marka vozila" required>
    <input type="text" name="model" placeholder="Model vozila" required>
    <input type="text" name="vlasnik" placeholder="Vlasnik vozila" required>
    <input type="text" name="napomena" placeholder="Napomena" required><br>
    <button type="submit">Unesi automobil</button>
</form>



<?php include "../footer.php"?>
