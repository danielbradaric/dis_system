<?php
$naslov = "DIS System";
include "../header.php";
include "../actions/please_login.php";
?>

<style>
    <?php include "../css/header-style.css"; ?>
</style>

<?php
$id = $_GET['id'];
$ime = $_GET['ime'];
$prezime = $_GET['prezime'];
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link rel="stylesheet" href="../css/odaberi.css">

<div class="main-space">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <form action="nekretnine_osoba.php" method="GET">
                    <input type="hidden" name="ime" value="<?php echo $ime; ?>">
                    <input type="hidden" name="prezime" value="<?php echo $prezime; ?>">
                    <button type="submit">Nekretnine</button>
                </form>
            </div>

            <div class="col-md-4">
                <form action="osoba.php" method="GET">
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <button type="submit">Sve informacije</button>
                </form>
            </div>

            <div class="col-md-4">
                <form action="registracije_osoba.php" method="GET">
                    <input type="hidden" name="ime" value="<?php echo $ime; ?>">
                    <input type="hidden" name="prezime" value="<?php echo $prezime; ?>">
                    <button type="submit">Registracijske oznake</button>
                </form>
            </div>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<?php include "../footer.php"; ?>
