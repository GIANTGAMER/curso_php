<?php

// validar cpf/cnpj via function separadas



function MascaraCPF ($cpf){
    $cpf = preg_replace('/[^0-9]/', '', $cpf);
    return $cpf;
}

function ValidarCPF ($cpf){
    $valido = "certo";
    $erro = "cpf inválido";
    if ($cpf = empty($cpf)){
        return $erro;
    }
    if (strlen(MascaraCPF($cpf)) == 11) {
        return $valido;
    } else { 
        return $erro;
    }
    

}
$cpf = "12356789110";
echo ValidarCPF($cpf);
?>