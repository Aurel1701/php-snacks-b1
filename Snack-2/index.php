<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare
(cercando i metodi che non conosciamo nella documentazione)
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
 -->

 <!-- Creo i parametri Get -->
 <?php
 $name = $_GET;
 $mail = $_GET;
 $age = $_GET;
 ?>;

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
/* verifico lunghezza con strlen, se è un numero con is_numeric e  con FILTER_VALIDATE_EMAIL la validità dell'email  */

if (strlen($name) > 3 && filter_var($mail, FILTER_VALIDATE_EMAIL) && is_numeric($age)) {
    echo '<h1>Accesso consentito</h1>';
} else {
    echo '<h1>Accesso negato</h1>';
}

?>

    
</body>
</html>