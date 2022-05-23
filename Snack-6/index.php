<?php
/* 

Prendere un paragrafo abbastanza lungo, contenente diverse frasi.
 Prendere il paragrafo e suddividerlo in tanti paragrafi.
 Ogni punto un nuovo paragrafo */
$paragraph = "Lorem ipsum dolor sit amet consectetur, adipisicing elit.
 Aspernatur sed magnam iste eligendi ipsa tenetur voluptatibus similique,
fugiat iure voluptates dolor ex atque dignissimos qui possimus rem quidem.
 Aspernatur eum dolores,
laboriosam, quis impedit nisi,
est corporis nobis laborum voluptas enim exercitationem soluta 
consequuntur aut vero dolorum eaque explicabo assumenda?";

/* divido il paragrafo a ogni virgola  */
$paragraphs = explode('.', $paragraph);

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
    <h1>Paragrafi:</h1>
    <div>
    <?php foreach ($paragraphs as $paragraph) { ?>
            <p> <?php echo $paragraph . '.' ?> </p>
        <?php } ?>
    </div>
</body>
</html>


