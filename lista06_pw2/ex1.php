<!DOCTYPE html>
<html>
<head>
    <title>Verificação de Força de Senha</title>
</head>
<body>
    <form method="POST">
        senha: <input type="password" name="senha" required>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $senha = $_POST["senha"];
        function verificarForca($senha) {
            $forca = 0;
            if (strlen($senha) >= 8) $forca++;
            if (preg_match('/[A-Z]/', $senha)) $forca++;
            if (preg_match('/[a-z]/', $senha)) $forca++;
            if (preg_match('/\d/', $senha)) $forca++;
            if (preg_match('/[\W]/', $senha)) $forca++;

            $niveis = ["Muito fraca", "Fraca", "Média", "Forte", "Muito forte"];
            return $niveis[$forca];
        }

        echo "Força da senha: " . verificarForca($senha);
    }
    ?>
</body>
</html>
