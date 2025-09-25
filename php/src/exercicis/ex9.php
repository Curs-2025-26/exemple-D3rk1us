<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulari - exercici 9</title>
</head>
<body>

    <?php

        $nom = trim($_POST['nom'] ?? "");
        $email = trim($_POST['email'] ?? "");
    ?>


    <form action="<?= $_SERVER["PHP_SELF"];?>" method="POST">

        <label for="nom">Nom: </label>
        <input type="text" name="nom" id="nom" value="<?php echo $nom; ?>">
        <br><br>
        <label for="email">Correu electrònic: </label>
        <br>
        <input type="text" name="email" id="email" value="<?php echo $email; ?>">
        <br>
        <br>
        <input type="submit" value="Enviar">
        <br>
        <br>
    </form>
    <?php
       
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
           
            
            if (!empty($nom) && !empty($email)) {
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo "<p><b>Nom: </b></p>" . nl2br(htmlspecialchars($nom));
                    echo "<p><b>Correu electrònic: </b></p>" . htmlspecialchars($email);
                } else {
                    echo "<p style='color:red;'>El correu electrònic no és vàlid.</p>";
                }
            } else {
                
                echo "<p style='color:red;'> No pot haver cap camp buit.</p>";
            }
        }

    ?>
</body>
</html>