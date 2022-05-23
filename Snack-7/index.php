<?php
/* Utilizzare questo array: https://pastebin.com/CkX3680A. 
Stampiamo il nostro array mettendo gli insegnanti
 in un rettangolo grigio e i PM in un rettangolo verde. */

 $db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

$teachers = $db['teachers'];
$pms = $db['pm'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .gray {
            background-color: gray;
        }
        .green {
            background-color: green;
        }
    </style>
</head>
<body>
<h1>Risultato:</h1>

<?php foreach ($db as $role => $people) { ?>
        <div class="<?= $role === 'pm' ? 'green' : 'gray' ?>">
                <?php foreach ($people as $person) : ?>
                    <p><?= "$person[name] $person[lastname]" ?></p>
                <?php endforeach; ?>
        </div>
    <?php } ?>
?>
    
</body>
</html>
