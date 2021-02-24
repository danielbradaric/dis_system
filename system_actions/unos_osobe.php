<?php
$naslov = "Unos nove osobe";
include "../header.php";
include "../actions/please_login.php";
?>
<style>
    <?php include "../css/header-style.css" ?>
</style>

    <link rel="stylesheet" href="../css/unos_osobe.css">

<form action="../actions/unos_osobe.php" method="POST" autocomplete="off">
    <h1>Unos nove osobe</h1>
    <input type="text" name= "ime" placeholder="Ime" required>
    <input type="text" name= "prezime" placeholder="Prezime" required>
    <input type="text" name= "spol" placeholder="Spol" required>
    <input type="text" name= "datum_rodenja" placeholder="Datum rođenja" required>
    <input type="text" name= "prebivaliste" placeholder="Prebivalište" required>
    <input type="text" name= "grad" placeholder="Grad" required>
    <input type="text" name= "maticna_drzava" placeholder="Matična država" required>
    <input type="text" name= "nacionalnost" placeholder="Nacionalnost" required>
    <input type="text" name= "tvrtka" placeholder="Tvrtka" required>
    <input type="text" name= "zanimanje" placeholder="Zanimanje" required>
    <input type="text" name= "kontakt" placeholder="Kontakt" required>
    <input type="text" name= "upisan_u_sustav" placeholder="Datum upisa u sustav" required>
    <input id="napomena" class="napomena" type="text" name= "napomena" placeholder="Napomena" style="height:80px" required><br>
    <label class="checkbox_label" for="checkbox">Unos dodatnih informacija:  </label>
    <input type="checkbox" id="checkbox" class="checkbox" onclick="checkbox_fun()">

    <div class="more_options" id="more_options" style="display: none">
        <h1>Unos dodatnih informacija</h1>
        <label for="tip_osobnosti">Odaberite tip osobnosti osobe:</label>
        <select name="tip_osobnosti" id="tip_osobnosti">
            <option value="nepoznato">Nepoznato</option>
            <option value="sangvinik">Sangvinik</option>
            <option value="melankolik">Melankolik</option>
            <option value="kolerik">Kolerik</option>
            <option value="flegmatik">Flegmatik</option>
        </select><br>
        <input type="text" name="interesi" placeholder="Interesi osobe">
        <input type="text" name="boja" placeholder="Najdraža boja">
        <input type="text" name="automobil" placeholder="Najdraži automobil">
        <input type="text" name="sport" placeholder="Sport">
        <input type="text" name="instagram" placeholder="Instagram račun">
        <input type="text" name="facebook" placeholder="Facebook račun">
        <input type="text" name="tajne" placeholder="Tajne">
        <input type="text" name="pin_mobitel" placeholder="Pin za otključavanje mobitela">
        <input type="text" name="lozinke" placeholder="Lozinke računa"><br>
        <input type="text" name="ime_majke" placeholder="Ime majke"><br>
        <input type="text" name="ime_oca" placeholder="Ime oca"><br>
        <input type="text" name="email_adresa" placeholder="Email adresa"><br>
        <input type="text" name="kucni_telefon" placeholder="Kućni telefon"><br>
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

    <br><button type="submit">Unesi</button>
</form>

<script>
    function checkbox_fun()  {

        var more_options = document.getElementById("more_options");

        if(document.querySelector('.checkbox:checked')) {

            more_options.style.display = "block";
    } else {
        more_options.style.display = "none"};
    }


</script>

<?php include "../footer.php"; ?>