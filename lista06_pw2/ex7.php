<?php
$senha = "MinhaSenha123";
$salt = bin2hex(random_bytes(16));
$hash = hash("sha256", $senha);
$hashsalt = hash("sha256", $salt . $senha);

echo "Senha: $senha <br>";
echo "Salt: $salt <br>";
echo "Hash: $hash <br>";
echo "Hash com Salt: $hashsalt";
?>
