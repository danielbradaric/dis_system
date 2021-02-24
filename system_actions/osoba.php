<?php
$naslov = "Infomacije o osobi";
include "../header.php";
include "../actions/please_login.php";
?>

<style>
    <?php include "../css/header-style.css"; ?>
</style>

<link rel="stylesheet" href="../css/osoba.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<?php $id = $_GET['id']; ?>

<?php

$sql = "SELECT * FROM popis_osoba where id=" . $id;
$result = $mysqli->query($sql);

?>

<?php
while($row = $result->fetch_assoc()) {
?>

<div class="white-space">
    <h1><?php echo $row['ime']; echo str_repeat('&nbsp;', 1); echo $row['prezime']; ?></h1>

    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="row1">
                    <p>Ime: <?php echo $row['ime'];?></p>
                    <p>Prezime: <?php echo $row['prezime'];?></p>
                    <p>Spol: <?php echo $row['spol'];?></p>
                    <p>Datum rođenja: <?php echo $row['datum_rodenja'];?></p>
                    <p>Prebivalište: <?php echo $row['prebivaliste'];?></p>
                    <p>Grad: <?php echo $row['grad'];?></p>
                    <p>Zanimanje: <?php echo $row['zanimanje'];?></p>
                </div>
            </div>
            <div class="col-md-7">
                <div class="row2">
                    <p>Matična država: <?php echo $row['maticna_drzava'];?></p>
                    <p>Nacionalnost: <?php echo $row['nacionalnost'];?></p>
                    <p>Tvrtka: <?php echo $row['tvrtka'];?></p>
                    <p>Kontakt: <?php echo $row['kontakt'];?></p>
                    <p>Upisan u sustav: <?php echo $row['upisan_u_sustav'];?></p>
                    <p>ID osobe: <?php echo $row['id'];?></p>
                    <p>Napomena: <?php echo $row['napomena'];?></p>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<?php include "../footer.php"?>

