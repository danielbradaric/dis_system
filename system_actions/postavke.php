<?php

$naslov = "Postavke";
include "../header.php";
include "../actions/please_login.php";
$ki = $_SESSION['username'];

?>

<style>
    <?php include "../css/header-style.css"; ?>
</style>

<script src="../js/settings_menu.js"></script>

<?php
$sql = "SELECT * FROM korisnici WHERE korisnicko_ime = '$ki'";
$result = $mysqli->query($sql);

$sql_2 = "SELECT * FROM log_info";
$result_2 = $mysqli->query($sql_2);

?>

<?php

$ipaddress = '';
if (isset($_SERVER['HTTP_CLIENT_IP']))
    $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
    $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
else if(isset($_SERVER['HTTP_X_FORWARDED']))
    $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
else if(isset($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']))
    $ipaddress = $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
    $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
else if(isset($_SERVER['HTTP_FORWARDED']))
    $ipaddress = $_SERVER['HTTP_FORWARDED'];
else if(isset($_SERVER['REMOTE_ADDR']))
    $ipaddress = $_SERVER['REMOTE_ADDR'];
else
    $ipaddress = 'UNKNOWN';

?>

<link rel="stylesheet" href="../css/settings.css">

<div class="row">
    <div class="column">
        <div class="main-menu">
            <ul>
                <li><a onclick="ToMs()" class= "start-button" id="start-button" style="color: blue">Glavne postavke</a></li>
                <li><a onclick="ToAs()" class="account_button" id="account_button" style="color: black">Informacije o računu</a></li>
                <li><a onclick="ToPs()" class="password_button" id="password_button" style="color: black">Promjena lozinke</a></li>
                <li><a onclick="ToDs()" class="database_button" id="database_button" style="color: black">Pristup bazi podataka</a></li>
                <li><a onclick="ToADs()" class="ad_button" id="ad_button" style="color: black">Neovlašteni pokušaji prijave</a></li>
            </ul>
        </div>
    </div>
    <div class="column">

        <?php
        while($row = $result->fetch_assoc()) {
        ?>

        <div class="main-settings" id="main-settings" style="display: block";>
            <h3>Datum:     <?php echo str_repeat('&nbsp;', 60); echo date("Y/m/d")?></h3>
            <h3>Prijavljeni korisnik: <?php echo str_repeat('&nbsp;', 38); echo $row['korisnicko_ime']; ?></h3>
            <h3>IP adresa: <?php echo str_repeat('&nbsp;', 55); echo $ipaddress; ?></h3>
        </div>

        <div class="account_settings" id="account_settings" style="display: none">
            <h3>Prijavljeni korisnik: <?php echo str_repeat('&nbsp;', 38); echo $row['korisnicko_ime']; ?></h3>
            <h3>Ovlasti korisnika: <?php echo str_repeat('&nbsp;', 42); ?>puna kontrola</h3>
        </div>

        <div class="password_change" id="password_change" style="display: none">
            <h3>Promjena administratorske lozinke: <?php echo str_repeat('&nbsp;', 20); ?> <a href="promjena_lozinke.php">Promjena lozinke</a></h3>
        </div>

        <div class="database_access" id="database_access" style="display: none">
            <h3>Pristup bazi podataka: <?php echo str_repeat('&nbsp;', 30); ?><a href="http://localhost/phpmyadmin/index.php" target="_blank">PhpMyAdmin</a> </h3>
            <h3>Server info: <?php echo str_repeat('&nbsp;', 49); echo ($mysqli->server_info); ?></h3>
            <h3>Client info: <?php echo str_repeat('&nbsp;', 50); echo ($mysqli->client_info); ?></h3>
            <h3>Connection info: <?php echo str_repeat('&nbsp;', 41); echo "Connected"?></h3>
            <h3>Host info: <?php echo str_repeat('&nbsp;', 53); echo ($mysqli->host_info); ?></h3>
            <h3>SQL State: <?php echo str_repeat('&nbsp;', 51); echo($mysqli->sqlstate); ?></h3>
        </div>

        <div class="access_denided" id="access_denied" style="display: none">
            <h3>Neovlašteni pokušaji prijave</h3>
            <table>

                <tr>
                    <th>IP Adresa</th>
                    <th>Datum</th>
                </tr>

                <?php
                while ($row = $result_2->fetch_assoc()) {
                ?>

                <tr>
                    <td><?php echo $row['ip']?></td>
                    <td><?php echo $row['datum']?></td>
                </tr>

                <?php
                }
                ?>

            </table>
        </div>

        <?php
        }
        ?>

    </div>
</div>

