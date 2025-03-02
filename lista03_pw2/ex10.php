<?php
    $alunos = [
        ["nome" => "Alice", "nota" => 8],
        ["nome" => "Bruno", "nota" => 6],
        ["nome" => "Carlos", "nota" => 9]
    ];

    foreach ($alunos as $aluno) {
        echo $aluno["nome"], " tirou nota ", $aluno["nota"], "<br>";
    }
?>
