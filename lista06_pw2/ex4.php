<!DOCTYPE html>
<html>
<head>
    <title>Comparar Hash MD5 e SHA-256</title>
</head>
<body>
    <form method="POST">
        Texto: <input type="text" name="texto" required>
        <input type="submit" value="Gerar Hash">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $texto = $_POST["texto"];
        $hashmd5 = md5($texto);
        $hashsha256 = hash("sha256", $texto);
        if($hashmd5 == $hashsha256) {
            echo "As hashes são iguais! <br>";
        } else {
            echo "As hashes são diferentes! <br>";
        }
    }
    ?>
</body>
</html>
