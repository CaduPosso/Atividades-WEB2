<?php
    function ehPrimo($num) {
        if ($num < 2) return false;
        for ($i = 2; $i <= $num/2 ; $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
        return true;
    }

    echo "Números primos entre 1 e 50:<br>";
    for ($i = 1; $i <= 50; $i++) {
        if (ehPrimo($i)) {
            echo "$i<br>";
        }
    }
?>
