
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta

<?php

$numeriCasuali = [];   // creo array vuoto dove andarnno i numeri random




while (count($numeriCasuali) < 15) {
    $random = rand(1, 50);

    if (!in_array($random, $numeriCasuali)) {
        $numeriCasuali[] = $random;
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Numbers random :</h1>

    <?php
    for ($i = 0; $i < count($numeriCasuali); $i++) {
        echo  $numeriCasuali[$i] ;
    }
    ?>
</body>
</html>