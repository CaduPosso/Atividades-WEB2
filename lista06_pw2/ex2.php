<!DOCTYPE html>
<html>
<head>
    <title>Gerar Hash MD5</title>
</head>
<body>
    <form method="POST">
        Texto: <input type="text" name="texto" required>
        <input type="submit" value="Gerar Hash">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $texto = $_POST["texto"];
        echo "Texto: $texto <br>";
        echo "Hash MD5: " . md5($texto);
    }
    ?>
</body>
</html>
