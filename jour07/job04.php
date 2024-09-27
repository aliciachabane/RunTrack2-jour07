<?php

function calcule($a, $operation, $b) {
    switch ($operation) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            return $a / $b;
        case '%':
            return $a % $b;
        default:
            return "Opération non valide";
    }
}


echo calcule(74, '+', 52); 
echo calcule(185, '-', 53);  
echo calcule(45, '*', 85); 
echo calcule(45, '/', 96); 
echo calcule(62, '%', 5); 
?>



