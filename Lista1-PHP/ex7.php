<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>
</head>
<body>
    <?php
        $num=2;
        $soma=1;
        while($num<101){
            $soma = $num + $soma;
            $num++;
        }
        echo "$soma";
    ?>
</body>
</html>