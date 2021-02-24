<?php
$naslov = "Unos nove nekretnine";
include "../header.php";
include "../actions/please_login.php";
?>

<style>
    <?php include "../css/header-style.css"?>
</style>

<link rel="stylesheet" href="../css/nova_nekretnina.css">


<form action="../actions/nova_nekretnina.php" method="POST" autocomplete="off">
    <h1>Unos nove nekretnine</h1>
    <label for="vrsta">Odaberite vrstu nekretnine:</label>
    <select name="vrsta">
        <option value="kuca">Kuća</option>
        <option value="stan">Stan</option>
        <option value="zemljiste">Zemljište</option>
        <option value="zgrada">Zgrada</option>
    </select><br><br>
    <input type="text" name="adresa" placeholder="Adresa nekretnine" required>
    <input type="text" name="grad" placeholder="Grad" required>
    <input type="text" name="vlasnik" placeholder="Vlasnik nekretnine" required>
    <input type="text" name="kc" placeholder="Katastarska čestica" required>
    <input type="text" name="napomena" placeholder="Napomena" required><br>
    <button type="submit">Unesi nekretninu</button>
</form>



<?php include "../footer.php"?>
