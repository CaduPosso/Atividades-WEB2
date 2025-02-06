<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
</head>
<body>
    <?php
        $idade=87;
        if($idade<=10)
            echo "Criança";
        else if($idade>10 && $idade<18)
            echo "Adolescente";
        else if($idade>=18 && $idade<60)
            echo "Adulto";
        else
            echo "Idoso";
    ?>
</body>
</html>