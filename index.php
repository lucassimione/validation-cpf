<?php

function calcularDecrementando($cpf, $multiplicador_inicial)
{
    $limite = $multiplicador_inicial - 1;
    $soma = 0;

    for ($i = 0; $i < $limite; $i++) {
        $soma += substr($cpf, $i, 1) * $multiplicador_inicial;
        $multiplicador_inicial--;
    }
    return $soma;
}

function obterRestoDivisao($soma)
{
    $resultado = ($soma * 10) % 11;
    return $resultado == 10 ? 0 : $resultado;
}

function compararValores($cpf, $posicaoCaractere, $resultado)
{
    return substr($cpf, $posicaoCaractere, 1) == $resultado ? true : false;
}

function validarCpf($cpf)
{
    $somaPrimeiroDigito = calcularDecrementando($cpf, 10);
    $calculoPrimeiroDigito = obterRestoDivisao($somaPrimeiroDigito);
    

    if(compararValores($cpf,9, $calculoPrimeiroDigito)){
        $somaSegundoDigito = calcularDecrementando($cpf, 11);
        $calculoSegundoDigito = obterRestoDivisao($somaSegundoDigito);

        echo compararValores($cpf, 10, $calculoSegundoDigito) ? 'CPF válido!' : 'CPF inválido!';
    } else {
        echo 'CPF inválido';
    }
}


