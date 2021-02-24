<?php
session_start();
include "actions/please_login.php";
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/admin-action.css">
    <title>Admin actions</title>
</head>
<body>

    <h1 class="naslov">Odaberite stavku informacijskog sustava kojoj želite pristupiti:</h1>
    <ul class="glavni-izbornik">
        <li><a href="/dis/system_actions/popis_osoba.php">Popis osoba</a></li>
        <li><a href="/dis/system_actions/nekretnine.php">Nekretnine</a></li>
        <li><a href="/dis/system_actions/registracijske_oznake.php">Registracijske oznake</a></li>
        <li><a href="">Informacije</a></li>
        <li><a href="/dis/system_actions/pretrazivanje.php">Pretraživanje</a></li>
    </ul>

</body>
</html>