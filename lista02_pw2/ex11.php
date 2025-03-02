<?php
    $numero = 5; 
    $fatorial = 1;
    $i = $numero;

    while ($i > 1) {
        $fatorial *= $i;
        $i--;
    }

    echo "O fatorial de $numero é: $fatorial";
?>
