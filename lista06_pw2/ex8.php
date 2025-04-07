<?php
$senha = "MinhaSenha123";
$hash = password_hash($senha, PASSWORD_DEFAULT);

echo "Senha original: $senha <br>";
echo "Hash armazenado: $hash <br>";

$senhaVerificar = "MinhaSenha123"; 
if (password_verify($senhaVerificar, $hash)) {
    echo "Senha correta!";
} else {
    echo "Senha incorreta!";
}
?>
