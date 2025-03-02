<?php
    $numeros = range(1, 10);

    echo "Números pares: ";
    foreach ($numeros as $num) {
        if ($num % 2 == 0) {
            echo "$num ";
        }
    }
?>
