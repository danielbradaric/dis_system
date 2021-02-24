<?php
$naslov = "Pretraživanje";
include "../header.php";
include "../actions/please_login.php";
?>

<style>
    <?php include "../css/header-style.css"; ?>
</style>

<link rel="stylesheet" href="../css/pretrazivanje.css">

<form action="../actions/pretrazivanje.php" method="GET">
    <h1>Pretraživanje po imenu</h1>
    <input type="text" name="search" placeholder="Unesite traženi pojam" required><br>
    <button type="submit">Pretraži</button>
</form>
<?php include "../footer.php";?>
