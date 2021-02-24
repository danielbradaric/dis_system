<?php
$naslov = "Uredi automobil";
include "../header.php";
include "../actions/please_login.php";

$id = $_GET['id'];

?>

<style>
    <?php include "../css/header-style.css"?>
</style>

<?php
$sql = "SELECT * FROM registracijske_oznake WHERE id=" . $id;
$result = $mysqli->query($sql);
?>

<link rel="stylesheet" href="../css/edit.css">

<form action="../actions/uredi_auto.php" method="POST" autocomplete="off">
    <h1>Uređivanje automobila</h1>

    <?php
    while ($row = $result->fetch_assoc()) {
    ?>

    <input type="hidden" name="id" value="<?php echo $id; ?>" required>
    <input type="text" name= "registracijska_oznaka" placeholder="<?php echo $row['registracijska_oznaka']?>" required>
    <input type="text" name= "marka" placeholder="<?php echo $row['marka']?>" required>
    <input type="text" name= "model" placeholder="<?php echo $row['model']?>" required>
    <input type="text" name= "vlasnik" placeholder="<?php echo $row['vlasnik']?>" required>
    <input type="text" name= "napomena" placeholder="<?php echo $row['napomena']?>" required>
    <br><button type="submit">Uredi</button>

    <?php
    }
    ?>

</form>

<?php include "../footer.php"; ?>

