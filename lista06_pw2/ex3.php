<!DOCTYPE html>
<html>
<head>
    <title>Gerar Hash SHA-256</title>
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
        echo "Hash SHA-256: " . hash("sha256", $texto);
    }
    ?>
</body>
</html>
