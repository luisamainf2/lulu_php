<?php
function media($a, $b, $c, $d): string
{
    $media = ($a + $b + $c) / 4;
    return $media;
}
echo 'a sua média é ' . media(6, 5, 8, 3);
echo '<br>';

$alunos[0]["nome"] = "luisa";
$alunos[0]["nota"] = media(3,2, 6, 7);

$alunos[1]["nome"] = "uisa";
$alunos[1]["nota"] = media(7,2, 7, 7);

$alunos[2]["nome"] = "isa";
$alunos[2]["nota"] = media(5,5, 8, 7);

$alunos[3]["nome"] = "sa";
$alunos[3]["nota"] = media(1,2, 6, 7);

var_dump($alunos);
for($i = 0; $i < count($alunos); $i++){
    echo 'nome do aluno: ' . $alunos[$i]["nome"] . '<br>' .
    $alunos[$i]["nota"] . '<br><br>';
}






?>