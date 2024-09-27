<?php

function leetSpeak($str) {
    $leet = [
        'A' => '4', 'a' => '4',
        'B' => '8', 'b' => '8',
        'E' => '3', 'e' => '3',
        'G' => '6', 'g' => '6',
        'L' => '1', 'l' => '1',
        'S' => '5', 's' => '5',
        'T' => '7', 't' => '7'
    ];

    $result = '';
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        $result .= isset($leet[$char]) ? $leet[$char] : $char;
    }

    return $result;
}

// Exemple d'utilisation
echo leetSpeak("Salut tout le monde!"); // Affichera "541u7 70u7 13 mond3!"
?>