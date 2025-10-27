<?php
function contarTempo(string $data): string
{
    $agora = strtotime(date(format: "Y/m/d"));
    $tempo = strtotime($data);

    echo('data do pc' . $agora);
    echo'<hr/>';
    echo('data digitada' . $tempo);

    $diferenca = $agora - $tempo;
    echo'<hr/>';
    echo ('diferença' . $diferenca);

    $segundos = $diferenca;
    $minutos = round(num: $diferenca / 60);
    $horas = round(num: $diferenca / 3600);
    $dias = round(num: $diferenca / 86400);
    $semanas = round(num: $diferenca / 604800);
    $meses = round(num: $diferenca / 2419200);
    $anos = round(num: $diferenca / 31536000);

    if ($segundos <= 60) {
        return 'agora';
    }elseif ($minutos <= 60) {
        return $minutos == 1 ? 'ha um minuto': 'ha' . $minutos . ' minutos';
    }elseif ($horas <= 24){
        return $horas == 1 ? 'ha 1 hora': $horas . ' horas';
    }elseif ($dias <= 7){
        return $dias == 1 ? 'ha 1 dia': $dias . ' dias';
    }elseif ($semanas <= 4){
        return $semanas == 1 ? 'ha 1 semana': $semanas . ' semana';
    }elseif ($meses <= 12){
        return $meses == 1 ? 'ha 1 mes': $meses . ' meses';
    }else {
        return $anos == 1 ? 'ha 1 ano' : $anos . 'anos';
    }


}
    echo "<hr>" . contarTempo('2008-09-24');
?>