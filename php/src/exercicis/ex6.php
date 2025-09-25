<?php

/*


    Declara una variable $nota amb un valor entre 0 i 10.
    Utilitza l’estructura match (true) per assignar un resultat segons el valor:
        10 → "Excel·lent"
        Entre 8 i 9 → "Molt bé"
        Entre 5 i 7 → "Bé"
        Per defecte → "Insuficient"

    Mostra el resultat per pantalla.

    Declara una variable $producte amb algun dels següents valors: "pa", "llet", "formatge".
    Usa un altre match per assignar un preu a cada producte.
    Mostra per pantalla el missatge: "El preu de formatge és 2.5 euros."
    
    ------------------------------
    
    $result = match ($variable) {
    valor1 => resultat1,
    valor2 => resultat2,
    valor3 => resultat3,
    // ...
    default => valorPerDefecte,
};

*/

$nota = 9;

$result = match (true) {
    $nota == 10 => "Excel·lent",
    $nota == 8 || $nota == 9 <= $nota  => "Molt bé",
    $nota == 5 || $nota == 6 || $nota == 7 <= $nota  => "Bé",
    default => "Insuficient",
};

echo("$result <br>");

$producte = "llet";

$preu = match ($producte) {

    "llet" => 2.5,
    "pa" => 1.0,
    default => 0.0
};

echo("El preu de $producte és $preu euros.");
