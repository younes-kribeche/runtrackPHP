<?php
function calcule(int $a,string $operator,int $b): string {
    switch ($operator) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            if ($b == 0) {
                return "Erreur : Division par zéro";
            }
            return $a / $b;
        default:
            return "Opérateur non supporté";
    }
}

echo calcule(5, '*', 20);
?>

