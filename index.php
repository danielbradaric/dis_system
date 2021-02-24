<?php

if(!empty($_SESSION['loggedIn'])) {
    header('location:admin_actions.php');
} else {
    null;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login-style.css">
    <title>DIS Login</title>
</head>
<body>
    
    <form class="login-form" action="actions/login.php" method="POST" autocomplete="off">
    <h1>DIS Login</h1>
    <input type="password" name="username" placeholder="Korisničko ime" required>
    <input type="password" name="password" placeholder="Lozinka" required>
    <button type="submit">Prijava</button>
    </form>

</body>
</html>