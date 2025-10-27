<?php
date_default_timezone_set(timezoneId: 'America/Sao_Paulo');
function saudacao(): string
{
    $hora = date(format: 'H');
    if ($hora >= 0 && $hora < 5) {
        $saudacao = 'boa madrugada!';
    }
    elseif ($hora >= 0 && $hora < 12) {
        $saudacao = 'bom dia!';
    }
    elseif ($hora >= 0 && $hora < 18) {
        $saudacao = 'boa tarde divas!!!!!';
    }
    elseif ($hora >= 0 && $hora < 24) {
        $saudacao = 'boa noite!';
    }

    return $saudacao;
}





?>