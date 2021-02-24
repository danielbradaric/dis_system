<?php
$naslov = "Uredi osobu";
include "../header.php";
include "../actions/please_login.php";

$id = $_GET['id'];

?>

<style>
    <?php include "../css/header-style.css"?>
</style>

<?php
$sql = "SELECT * FROM popis_osoba WHERE id=" . $id;
$result = $mysqli->query($sql);
?>

<link rel="stylesheet" href="../css/edit.css">

<form action="../actions/uredi_osobu.php" method="POST" autocomplete="off">
    <h1>Uređivanje osobe</h1>

    <?php
    while ($row = $result->fetch_assoc()) {
    ?>

    <input type="hidden" name="id" value="<?php echo $id; ?>" required>
    <input type="text" name="ime" value="<?php echo $row['ime']?>" required>
    <input type="text" name="prezime" value="<?php echo $row['prezime']?>" required>
    <input type="text" name="prebivaliste" value="<?php echo $row['prebivaliste']?>" required>
    <input type="text" name="grad" value="<?php echo $row['grad']?>" required>
    <input type="text" name="maticna_drzava" value="<?php echo $row['maticna_drzava']?>" required>
    <input type="text" name="tvrtka" value="<?php echo $row['tvrtka']?>" required>
    <input type="text" name="zanimanje" value="<?php echo $row['zanimanje']?>" required>
    <input type="text" name="kontakt" value="<?php echo $row['kontakt']?>" required>
    <input id="napomena" type="text" name="napomena" value="<?php echo $row['napomena']?>" style="height:80px" required>

        <div class="more_options" id="more_options">
            <h1>Uređivanje dodatnih informacija</h1>
            <label for="tip_osobnosti">Odaberite tip osobnosti osobe:</label>
            <select name="tip_osobnosti" id="tip_osobnosti">
                <option value="nepoznato">Nepoznato</option>
                <option value="sangvinik">Sangvinik</option>
                <option value="melankolik">Melankolik</option>
                <option value="kolerik">Kolerik</option>
                <option value="flegmatik">Flegmatik</option>
            </select><br>
            <input type="text" name="interesi" value="<?php echo $row['interesi']?>">
            <input type="text" name="boja" value="<?php echo $row['boja']?>">
            <input type="text" name="automobil" value="<?php echo $row['automobil']?>">
            <input type="text" name="sport" value="<?php echo $row['sport']?>">
            <input type="text" name="instagram" value="<?php echo $row['instagram']?>">
            <input type="text" name="facebook" value="<?php echo $row['facebook']?>">
            <input type="text" name="tajne" value="<?php echo $row['tajne']?>">
            <input type="text" name="pin_mobitel" value="<?php echo $row['pin_mobitel']?>">
            <input type="text" name="lozinke" value="<?php echo $row['lozinke']?>"><br>
            <input type="text" name="ime_majke" value="<?php echo $row['ime_majke']?>"><br>
            <input type="text" name="ime_oca" value="<?php echo $row['ime_oca']?>"><br>
            <input type="text" name="email_adresa" value="<?php echo $row['email_adresa']?>"><br>
            <input type="text" name="kucni_telefon" value="<?php echo $row['kucni_telefon']?>"><br>
            <label for="teleoperater">Odaberite teleoperatera kojeg osoba koristi:</label>
            <select name="teleoperater" id="teleoperater" class="teleoperater">
                <option value="nepoznato">Nepoznato</option>
                <option value="tomato">Tomato</option>
                <option value="bonbon">Bonbon</option>
                <option value="ht">HT</option>
                <option value="a1">A1</option>
                <option value="telemach">Telemach hrvatska</option>
            </select><br>
            <label for="date">Datum rođendana:</label>
            <input type="date" name="rodjendan" id="date">
        </div>
    <br><button type="submit">Uredi</button>

    <?php
    }
    ?>

</form>

<?php include "../footer.php"; ?>
