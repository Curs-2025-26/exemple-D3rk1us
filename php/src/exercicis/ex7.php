<!DOCTYPE html>
<html>
<body>
    <h1>Informació del Servidor</h1>
    <li>
        <ul><?= "Nom del servidor: ".$_SERVER["SERVER_NAME"]."<br>" ?></ul>
        <ul><?= "Adreça IP: ".$_SERVER["SERVER_ADDR"]."<br>"; ?></ul>
        <ul><?= "Software del servidor: ".$_SERVER["SERVER_SOFTWARE"]."<br>"; ?></ul>
        <ul><?= "Agent d'usuari del client: ".$_SERVER["HTTP_USER_AGENT"]."<br>"; ?></ul>
        <ul><?= "Mètode de la sol·licitud: ".$_SERVER["REQUEST_METHOD"]."<br>"; ?></ul>
        <ul><?= "URL de la sol·licitud: ".$_SERVER["REQUEST_URI"]."<br>"; ?></ul>
        <ul>
            <?php
                try {

                    if(!isset($_SERVER["HTTP_REFERER"])) {
                        throw new Exception("No disponible.");
                    }

                    echo "Referent de la pàgina: ".$_SERVER["HTTP_REFERER"]."<br>";

                } catch (Exception $e) {
                    echo "Referent de la pàgina: ".$e->getMessage()."<br>";
                }
            ?>
        </ul>
        <ul><?= "Protocol utilitzat: ".$_SERVER["SERVER_PROTOCOL"]."<br>"; ?></ul>
        <ul><?= "Port utilitzat: ".$_SERVER["SERVER_PORT"]."<br>"; ?></ul>
    </li>
</body>
</html>

