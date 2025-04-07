<?php
$senha = "MinhaSenha123";
$hash1 = password_hash($senha, PASSWORD_DEFAULT);
$hash2 = password_hash($senha, PASSWORD_DEFAULT);

echo "Senha: $senha <br>";
echo "Hash 1: $hash1 <br>";
echo "Hash 2: $hash2";
?>
