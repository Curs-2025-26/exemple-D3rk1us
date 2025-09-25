<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        
    <?php
    $edat = 18;

    if ($edat < 0 ) {
        echo("Edat invàlida");

    } elseif ($edat >= 18) {
        echo("Ets major d'edat");
    } else {
        echo("Ets menor d'edat");
    }
    ?>
</body>
</html>

