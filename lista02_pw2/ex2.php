<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    <?php
        $num1 = 5;
        $num2 = 5;

        if ($num1 > $num2) {
            echo "O maior número é: $num1";
        } elseif ($num2 > $num1) {
            echo "O maior número é: $num2";
        } else {
            echo "Os números são iguais.";
        }
    ?>
</body>
</html>