<?php
include "connection.php";


$ime = $_POST['ime'];
$prezime = $_POST['prezime'];
$spol = $_POST['spol'];
$datum_rodenja = $_POST['datum_rodenja'];
$prebivaliste = $_POST['prebivaliste'];
$grad = $_POST['grad'];
$maticna_drzava = $_POST['maticna_drzava'];
$nacionalnost = $_POST['nacionalnost'];
$tvrtka = $_POST['tvrtka'];
$zanimanje = $_POST['zanimanje'];
$kontakt = $_POST['kontakt'];
$upisan_u_sustav = $_POST['upisan_u_sustav'];
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


$sql = "INSERT INTO popis_osoba (ime, prezime, spol, datum_rodenja, prebivaliste, grad, maticna_drzava, nacionalnost, tvrtka, zanimanje, kontakt, upisan_u_sustav, napomena, tip_osobnosti, interesi, boja, automobil, sport, instagram, facebook, tajne, pin_mobitel, lozinke, ime_majke, ime_oca, email_adresa, kucni_telefon, teleoperater, rodjendan) VALUES ('$ime', '$prezime', '$spol', '$datum_rodenja', '$prebivaliste', '$grad', '$maticna_drzava', '$nacionalnost', '$tvrtka', '$zanimanje', '$kontakt', '$upisan_u_sustav', '$napomena', '$osobnost', '$interesi', '$boja', '$automobil', '$sport', '$instagram', '$facebook', '$tajne', '$pin_mobitel', '$lozinke', '$ime_majke', '$ime_oca', '$email_adresa', '$kucni_telefon', '$teleoperater', '$rodjendan')";

if ($mysqli->query($sql) === TRUE) {
    echo "Osoba je uspješno unesena!";
    header( "refresh:2;url=../system_actions/popis_osoba.php" );
} else {
    echo "Greška: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();
?>