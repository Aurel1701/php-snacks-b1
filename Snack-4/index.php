<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
 Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

 <?php
/* creo array alunni */
 $students = [
    [
        'nome' => 'Zlatan',
        'cognome' => 'Ibrahimovic',
        'voti' => [7, 6, 7, 9]
    ],
    [
        'nome' => 'Luca',
        'cognome' => 'Messeri',
        'voti' => [5, 9, 5, 8]
    ],
    [
        'nome' => 'Luigi',
        'cognome' => 'puglia',
        'voti' => [4, 10, 9]
    ]
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
 <?php foreach ($students as $student) :
        $somma = array_sum($student['voti']) / count($student['voti']);
    ?>
        <h1><?= "$student[nome] $student[cognome]" ?></h1>
        <p>Media Voti: </p> <?= round($somma, 2) ?>
    <?php endforeach; ?>
 </body>
 </html>