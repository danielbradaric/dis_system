<?php
$naslov = "Popis nekretnina";
include "../header.php";
include "../actions/please_login.php";
?>

<style>
    <?php include "../css/header-style.css"?>
</style>

<link rel="stylesheet" href="../css/nekretnine.css">


<?php
$sql = "SELECT * FROM nekretnine";
$result = $mysqli->query($sql);
?>



<div class="nova_nekretnina">
    <a href="../system_actions/nova_nekretnina.php" target="_blank">Unesi novu nekretninu</a>
</div>

<div class="white-space">
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Vrsta nekretnine</th>
            <th>Adresa</th>
            <th>Grad</th>
            <th>Vlasnik</th>
            <th>K. Č.</th>
            <th>Napomena</th>
            <th>Uredi</th>
            <th>Obriši</th>
        </tr>

        <?php
        while ($row = $result->fetch_assoc()) {
            ?>

            <tr>
                <td><?php echo$row['id']; ?></td>
                <td><?php echo$row['vrsta']; ?></td>
                <td><?php echo$row['adresa']; ?></td>
                <td><?php echo$row['grad']; ?></td>
                <td><?php echo$row['vlasnik']; ?></td>
                <td><?php echo$row['kc']?></td>
                <td><?php echo$row['napomena']?></a></td>
                <td><a href="uredi_nekretninu.php?id=<?php echo $row['id']; ?>">Uredi podatke</a></td>
                <td><a href="../actions/obrisi_nekretninu.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Jeste li sigurni da želite obrisati nekretninu?')">Obriši</td>
            </tr>

            <?php
        }
        ?>

    </table>
</div>


<?php include "../footer.php"; ?>
