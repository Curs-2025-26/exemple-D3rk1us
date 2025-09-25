<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruites</title>
</head>
<body>

<?php

    $fruites = ["poma", "plàtan", "maduixa"];

    echo "Primer element: $fruites[0] <br>";

    $fruites[] = "taronja";

    foreach ($fruites as $fruit) {

        echo("$fruit <br>");
    }

?>
</body>
</html>




