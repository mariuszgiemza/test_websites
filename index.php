<!DOCTYPE html>
<html lang="pl">

<head>
    <title>Strona Testowa</title>
</head>

<?php
date_default_timezone_set("Europe/Warsaw");
?>

<body>
    <h1>Strona Testowa PHP</h1>
    <h2>Godzina:</h2>
    <h3><?php echo date("H:i"); ?></h3>
    <h2>Data:</h2>
    <h3><?php echo date("d.m.Y"); ?></h3>
</body>

</html>
