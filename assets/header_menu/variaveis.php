<?php
echo 'ooiii<br>';
echo '<hr>';
print 'hello world';
echo '<hr>';
echo '<p style="font-family: Cambria, sans-serif; color: darkmagenta ">sei la</p>';
echo '<hr>';

$nome = 'John doe';
$sobrenome = 'smith';
$nomeCompleto = $nome . ' ' . $sobrenome;
echo ($nomeCompleto);
echo '<hr>';
$cpf = '1234567890';
var_dump($cpf);
echo '<hr>';
if ($cpf == '478569478') {
    echo 'esse cpf ta bizarro';
}else{
    echo'com esse cpf mais R$ 200 você entra no cinema na terça com direito a um gatinho!!!';
}

echo '<hr>';

function soma($peso, $altura)
{
    $imc = $peso / ($altura * $altura);
    echo 'seu imc é' . $imc . '. ';

    if ($imc < 18) {
        return 'abaixo do peso';
    }elseif ($imc > 18 && $imc <= 65) {
        return 'peso normal';
    }elseif ($imc > 65 && $imc <= 90) {
        return 'sobrepeso';
    }elseif ($imc > 90 && $imc <= 100) {
        return 'obesidade';
    }
}

echo "meu imc é " . soma(47, 1.63);