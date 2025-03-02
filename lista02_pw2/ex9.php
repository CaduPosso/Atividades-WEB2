<?php
    $letra = 'c'; 

    switch ($letra) {
        case 'a':
        case 'e':
        case 'i':
        case 'o':
        case 'u':
            echo "A letra '$letra' é uma vogal.";
            break;
        default:
            echo "A letra '$letra' é uma consoante.";
            break;
    }
?>
