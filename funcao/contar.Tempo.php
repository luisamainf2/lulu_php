<?php
function contarTempo(string $data): string
{
    $agora = strtotime(date(format: "Y/m/d"));
    $tempo = strtotime($data);

    echo($agora);
    echo'<hr/>';
    echo($tempo);

    return true;
}

?>