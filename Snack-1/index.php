<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php 
/* creo Array di partite  */
$partite = [
    
    [
        'casa' => 'Miami',
        'ospite' => 'Bulls',
        'scoreCasa' => 45,
        'scoreOspite' => 50,
    ],

    [
        'casa' => 'Armani',
        'ospite' => 'Leakers',
        'scoreCasa' => 70,
        'scoreOspite' => 40,
    ],

    [
        'casa' => 'Siena',
        'ospite' => 'Olimpia',
        'scoreCasa' => 50,
        'scoreOspite' => 65,
    ],

    [
        'casa' => 'Boston',
        'ospite' => 'New York ',
        'scoreCasa' => 80,
        'scoreOspite' => 89,
    ],
    
];

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
    <h1>Partite del giorno :</h1>
     <?php
     /* ciclo all'interno delle partite e con count restituisco il numero di elementi 
     che ho nell'array*/
     for ($i=0; $i < count($partite) ; $i++) { 
         echo "<div> {$partite[$i]["casa"]}  -  {$partite[$i]["ospite"]}  {$matches[$i]["scoreCasa"]}  :  {$matches[$i]["scoreOspite"]} </div>";

     }
     
     ?>


</body>
</html>