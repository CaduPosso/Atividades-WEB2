<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9</title>
</head>
<body>
    <?php
        $num=101;
        $aux=0;
        for($i=2; $i <= $num/2; $i++){
            if($num%$i == 0)
                $aux++;
        }
        if($aux==0)
            echo "O número $num é primo.";
        else
            echo "O número $num não é primo.";
    ?>
</body>
</html>