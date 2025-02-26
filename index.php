<!DOCTYPE html>
<html lang="pl">

<head>
    <title>Strona testowa</title>
</head>

<?php
date_default_timezone_set("Europe/Warsaw");
?>

<body>
    <h1>Strona testowa w PHP</h1>
    <h2>Dziś jest </h2>
    <h3><?php echo date("d.m.Y"); ?></h3>
    <h2>Godzina <?php echo date("H:i"); ?></h2>
    <h3><?php echo date("H:i"); ?></h3>
  
   
</body>

</html>
