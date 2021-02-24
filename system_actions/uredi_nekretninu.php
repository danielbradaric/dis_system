<?php
$naslov = "Uredi nekretninu";
include "../header.php";
include "../actions/please_login.php";
$id = $_GET['id'];
?>

<style>
    <?php include "../css/header-style.css" ?>
</style>


<?php
$sql = "SELECT * FROM nekretnine WHERE id=" . $id;
$result = $mysqli->query($sql);
?>

<link rel="stylesheet" href="../css/edit.css">

<form action="../actions/uredi_nekretninu.php" method="POST" autocomplete="off">
    <h1>Uređivanje nekretnine</h1>

    <?php
    while ($row = $result->fetch_assoc()) {
        ?>
        <label for="vrsta">Odaberite vrstu nekretnine: </label>
        <select name="vrsta">
            <option value="kuca">Kuća</option>
            <option value="stan">Stan</option>
            <option value="zemljiste">Zemljište</option>
            <option value="zgrada">Zgrada</option>
        </select><br>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input class="one" type="text" name ="adresa" placeholder="<?php echo $row['adresa']; ?>" required>
        <input type="text" name ="grad" placeholder="<?php echo $row['grad']; ?>" required>
        <input type="text" name ="vlasnik" placeholder="<?php echo $row['vlasnik']; ?>" required>
        <input type="text" name ="kc" placeholder="<?php echo $row['kc']; ?>" required>
        <input type="text" name ="napomena" placeholder="<?php echo $row['napomena']; ?>" required><br>
        <button type="submit">Uredi</button>

        <?php
    }
    ?>

</form>

<style type="text/css">
    .one {
        margin-top: 20px;
    }
</style>

<?php include "../footer.php"; ?>
