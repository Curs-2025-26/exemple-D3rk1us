<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulari - exercici 8</title>
</head>
<body>
    <form action="<?= $_SERVER["PHP_SELF"];?>" method="POST">

        <label for="email">Correu electrònic: </label>
        <input type="text" name="email" id="email" required>
        <br><br>
        <label for="missatge">Missatge:</label>
        <br>
        <textarea name="missatge" id="missatge" cols="33" rows="5" required></textarea>
        <br>
        <br>
        <input type="submit" value="Enviar">
        <br>
        <br>
    </form>
    <?php
       
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = trim($_POST['email'] ?? "");
            $missatge = trim($_POST['missatge'] ?? "");
            
            if (!empty($email) && !empty($missatge)) {
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo "<p><b>Correu electrònic: </b></p>" . htmlspecialchars($email);
                    echo "<p><b>Missatge: </b></p>" . nl2br(htmlspecialchars($missatge));
                } else {
                    echo "<p style='color:red;'>El correu electrònic no és vàlid.</p>";
                }
            } else {
                echo "No pot haver cap camp buit.";
            }
        }

    ?>
</body>
</html>