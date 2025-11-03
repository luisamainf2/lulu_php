<?php

$mes = array ();

    $mes = [
        'janeiro','fevereiro','março','abril','maio','junho','julho','agosto','setembro','outubro','novembro','dezembro'
    ];
echo 'CHAVE E VALOR<br>';
foreach ($mes as $key => $value) {
    echo $key . ' => ' . $value . '<br>';
}
echo '<hr>';
echo 'VAR_DUMP';
var_dump($mes);
echo'<hr>';
echo 'posição 1 do array MÊS <br>';
echo $mes[4];
echo '<hr>';

function dataAtual(): string
{
    $diaMes = date('d');
    $diaSemana = date('w');
    $mes = date('n');
    $ano = date('Y');

    $nomesDosMeses = ['janeiro','fevereiro','março','abril','maio','junho','julho','agosto','setembro','outubro','novembro','dezembro'];
    $nomesDiasDaSemana = ['domingo','segunda-feira','terça-feira','quarta-feira','quinta-feira','sexta-feira','sábado'];
    $dataFormatada = $nomesDiasDaSemana[$diaSemana] . ', ' . $diaMes . ' de ' . $nomesDosMeses[$mes - 1] . ' de ' . $ano;
return $dataFormatada;
}
echo dataAtual();