<!DOCTYPE html>
<html>
<head>
    <title>Comparar Hash SHA-512</title>
</head>
<body>
    <form method="POST">
        Texto1: <input type="text" name="texto1" required>
        Texto2: <input type="text" name="texto2" required>
        <input type="submit" value="Gerar Hash">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $texto1 = $_POST["texto1"];
        $texto2 = $_POST["texto2"];

        $hash1 = hash("sha512", $texto1);
        $hash2 = hash("sha512", $texto2);
        if($hash1 == $hash2) {
            echo "As hashes são iguais! <br>";
        } else {
            echo "As hashes são diferentes! <br>";
        }
    }
    ?>
</body>
</html>
