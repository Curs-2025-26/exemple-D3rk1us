<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulari - exercici 8</title>
</head>
<body>
    <form action="" method="post">
<!-- 
    Crea una pàgina HTML amb un formulari que demane:
        Una adreça de correu electrònic (email)
        Un missatge (textarea)
    El formulari s’ha d’enviar mitjançant el mètode POST i validar:
        Que el camp email conté una adreça vàlida (FILTER_VALIDATE_EMAIL)
        Que els camps no estiguen buits (usa required en HTML i valida amb PHP)
    Mostra un missatge de confirmació si tot és correcte, o d’error si el correu no és vàlid.
    Assegura’t de protegir el contingut rebut amb htmlspecialchars() per evitar problemes de seguretat.
-->
        <label for="email">Correu electrònic: </label>
        <input type="text" name="email" id="email">
        <br><br>
        <label for="missatge">Missatge:</label>
        <textarea name="missatge" id="missatge"></textarea>
    </form>
</body>
</html>