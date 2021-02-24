<?php
$naslov = "Popis osoba";
include "../header.php";
include "../actions/please_login.php";

?>
<style>
<?php include "../css/header-style.css" ?>
</style>

<?php

$sql = "SELECT * FROM popis_osoba";
$result = $mysqli->query($sql);

?>

<link rel="stylesheet" href="../css/popis-osoba.css">

<div class="unos_osobe">
    <a href="unos_osobe.php" target="_blank">Unesi novu osobu</a>
</div>

<div class="table">
    <table>
        <tr>
            <th>ID</th>
            <th>Ime</th>
            <th>Prezime</th>
            <th>Tvrtka</th>
            <th>Zanimanje</th>
            <th>Sve informacije</th>
            <th>Uredi</th>
            <th>Obriši osobu</th>
        </tr>

        <?php
        while($row = $result->fetch_assoc()) {
        ?>

            <tr>
                <td><?php echo$row['id'] ?></td>
                <td><?php echo$row['ime'] ?></td>
                <td><?php echo$row['prezime'] ?></td>
                <td><?php echo$row['tvrtka'] ?></td>
                <td><?php echo$row['zanimanje'] ?></td>
                <td><form method="get" action="odaberi.php" class="popis_forma">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <input type="hidden" name="ime" value="<?php echo $row['ime']; ?>">
                        <input type="hidden" name="prezime" value="<?php echo $row['prezime']; ?>">
                        <button type="submit"><?php echo $row['ime']; echo str_repeat('&nbsp;', 1); echo $row['prezime']; ?></button>
                    </form>
                </td>
                <td><a href="uredi_osobu.php?id=<?php echo $row['id']; ?>" target="_blank">Uredi podatke</a></td>
                <td><a href="../actions/obrisi_osobu.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Jeste li sigurni da želite obrisati osobu?');">Obriši</td>
            </tr>

            <?php
        }
        ?>
    </table>
</div>

<?php include "../footer.php"; ?>
