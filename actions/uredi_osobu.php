<?php
include "connection.php";

$id = $_POST['id'];
$ime = $_POST['ime'];
$prezime = $_POST['prezime'];
$prebivaliste = $_POST['prebivaliste'];
$grad = $_POST['grad'];
$maticna_drzava = $_POST['maticna_drzava'];
$tvrtka = $_POST['tvrtka'];
$zanimanje = $_POST['zanimanje'];
$kontakt = $_POST['kontakt'];
$napomena = $_POST['napomena'];
$osobnost = $_POST['tip_osobnosti'];
$interesi = $_POST['interesi'];
$boja = $_POST['boja'];
$automobil = $_POST['automobil'];
$sport = $_POST['sport'];
$instagram = $_POST['instagram'];
$facebook = $_POST['facebook'];
$tajne = $_POST['tajne'];
$pin_mobitel = $_POST['pin_mobitel'];
$lozinke = $_POST['lozinke'];
$ime_majke = $_POST['ime_majke'];
$ime_oca = $_POST['ime_oca'];
$email_adresa = $_POST['email_adresa'];
$kucni_telefon = $_POST['kucni_telefon'];
$teleoperater = $_POST['teleoperater'];
$rodjendan = $_POST['rodjendan'];

$sql = "UPDATE popis_osoba SET ime='$ime', prezime='$prezime', prebivaliste='$prebivaliste', grad='$grad', maticna_drzava='$maticna_drzava', tvrtka='$tvrtka', zanimanje='$zanimanje', kontakt='$kontakt', napomena='$napomena',tip_osobnosti='$osobnost', interesi='$interesi', boja='$boja', automobil='$automobil', sport='$sport', instagram='$instagram', facebook='$facebook', tajne='$tajne', pin_mobitel='$pin_mobitel', lozinke='$lozinke', ime_majke='$ime_majke', ime_oca='$ime_oca', email_adresa='$email_adresa', kucni_telefon='$kucni_telefon', teleoperater='$teleoperater', rodjendan='$rodjendan' WHERE id='$id'";

if ($mysqli->query($sql) === TRUE) {
    echo "Podaci o osobi su uspješno ažurirani!";
    header('refresh:2;url=../system_actions/popis_osoba.php');
} else {
    echo "Greška prilikom ažuriranja podataka osobe!" . $mysqli->error;
}

$mysqli->close();