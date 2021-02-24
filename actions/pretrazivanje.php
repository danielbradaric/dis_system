<?php
include "../header.php";
?>
<style>
    <?php include "../css/header-style.css"; ?>
</style>

<link rel="stylesheet" href="../css/pretrazivanje.css">


<?php
$search = $_GET['search'];

$sql = "SELECT * FROM popis_osoba WHERE ime = '$search'";
$result = $mysqli->query($sql);

while ($row = $result->fetch_assoc()) {
?>
    <table>
        <tr>
            <th>Ime</th>
            <th>Prezime</th>
            <th>Adresa</th>
            <th>Grad</th>
            <th>Tvrtka</th>
        </tr>

        <tr>
            <td><?php echo $row['ime']; ?></td>
            <td><?php echo $row['prezime']; ?></td>
            <td><?php echo $row['prebivaliste']; ?></td>
            <td><?php echo $row['grad']; ?></td>
            <td><?php echo $row['tvrtka']; ?></td>
        </tr>
    </table>

<?php
}
?>


<?php include "../footer.php"; ?>
