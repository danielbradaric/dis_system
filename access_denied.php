<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/acces_denied.css">
    <title>Pristup odbijen!</title>
</head>
<body>

<div class="white-space">
    <h1>Pristup odbijen</h1>
    <h2>Unijeto je pogrešno korisničko ime ili lozinka. Ovaj pokušaj neovlaštene prijave biti će zabilježen i prijavljen. Vaša IP adresa spremljena je u log datoteku.</h2>
</div>

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

$ip = $ipaddress;
$date = date("Y/m/d/h/m/s");

?>

<form action="actions/log_info.php" method="post">
    <input type="hidden" value="<?php echo $ip; ?>" name="ip">
    <input type="hidden" value="<?php echo $date; ?>" name="date">
    <button type="submit" id="submit-button"></button>
</form>

<script>
    window.onload = function() {
        var button = document.getElementById("submit-button");
        button.form.submit();
    }
</script>

</body>
</html>
