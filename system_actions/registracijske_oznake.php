<?php
$naslov = "Popis registracijskih oznaka";
include "../header.php";
include "../actions/please_login.php";
?>

<style>
    <?php include "../css/header-style.css"; ?>
</style>

<?php
$sql = "SELECT * FROM registracijske_oznake";
$result = $mysqli->query($sql);
?>

<link rel="stylesheet" href="../css/registracijske_oznake.css">

<div class="novi_auto">
    <a href="../system_actions/novi_auto.php" target="_blank">Unesi novi automobil</a>
</div>

<div class="white-space">
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Registracijska oznaka</th>
            <th>Marka automobila</th>
            <th>Model Automobila</th>
            <th>Vlasnik</th>
            <th>Napomena</th>
            <th>Više informacija</th>
            <th>Uredi</th>
            <th>Obriši</th>
        </tr>

        <?php
        while ($row = $result->fetch_assoc()) {
        ?>

        <tr>
            <td><?php echo$row['id']; ?></td>
            <td><?php echo$row['registracijska_oznaka']; ?></td>
            <td><?php echo$row['marka']; ?></td>
            <td><?php echo$row['model']; ?></td>
            <td><?php echo$row['vlasnik']; ?></td>
            <td><?php echo$row['napomena']?></td>
            <td><a href="https://www.google.com/search?q=<?php echo$row['marka']?>+<?php echo$row['model']?>" target="_blank">Google</a></td>
            <td><a href="../system_actions/uredi_auto.php?id=<?php echo $row['id']; ?>">Uredi</a></td>
            <td><a href="../actions/obrisi_auto.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Jeste li sigurni da želite obrisati automobil?')">Obriši</td>
        </tr>

        <?php
        }
        ?>

    </table>
</div>

<?php include "../footer.php"; ?>
