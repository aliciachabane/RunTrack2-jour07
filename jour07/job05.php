<?php

function occurrences($str, $char) {
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == $char) {
            $count++;
        }
    }
    return $count;
}

// Exemple d'utilisation
echo occurrences("Bonjour", "o"); // Affichera 2
?>
