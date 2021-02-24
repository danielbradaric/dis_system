<?php include "actions/connection.php";
include "actions/please_login.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/header-style.css">
    <title><?php echo $naslov; ?></title>
</head>
<body>

<ul class="glavni-izbornik">
    <li><a href="/dis/system_actions/popis_osoba.php">Popis osoba</a></li>
    <li><a href="/dis/system_actions/nekretnine.php">Nekretnine</a></li>
    <li><a href=/dis/system_actions/registracijske_oznake.php>Registracijske oznake</a></li>
    <li><a href="">Informacije</a></li>
    <li><a href="/dis/system_actions/pretrazivanje.php">Pretraživanje</a></li>

    <a href="postavke.php">
    <img src="../images/settings.png" alt="" height="30" width="30" class="settings_icon">
    </a>

    <a href="../actions/logout.php" class="odjava">Odjava</a>
</ul>



</body>
</html>








