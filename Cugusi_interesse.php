<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interesse</title>
</head>
<body>
    <?php
    $capitale = 25000;
    $tasso = 7;
    $numGiorni = 30;
    $interesse;



    echo "<p> Capitale = " . $capitale . " €";
    echo "<p> Tasso = " . $tasso . " €";
    echo "<p> Num Giorni = " . $numGiorni;

    $interesse = ($capitale * $tasso * $numGiorni)/36500;

    $interesse = number_format($interesse, 2);

    echo "<h2 style= 'color: green;'>L'interesse calcolato e' di " . $interesse . " € ";

    ?>
    
</body>
</html>