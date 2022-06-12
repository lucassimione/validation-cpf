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
    
}
