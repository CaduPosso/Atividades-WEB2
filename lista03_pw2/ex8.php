<?php
    $produtos = [
        "Notebook" => 3500,
        "Mouse" => 80,
        "Teclado" => 120
    ];

    foreach ($produtos as $produto => $preco) {
        echo "Produto: $produto - Preço: R$ $preco<br>";
    }
?>
