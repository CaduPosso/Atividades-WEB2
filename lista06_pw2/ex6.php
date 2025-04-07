<?php
$algoritmos = ["md5", "sha1", "sha256", "sha512", "ripemd160"];
$texto = "Teste123";

echo "Texto: $texto <br>";
echo "Algoritmos de Hash:<br>";

foreach ($algoritmos as $alg) {
    echo strtoupper($alg) . ": " . hash($alg, $texto) . "<br>";
}
?>
