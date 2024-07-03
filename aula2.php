<?php

$IdadePessoa=17;
// informa a idade da pessoa
$DinheiroNaCarteira=999;
// informa o dinheiro da pessoa

if($IdadePessoa >= 18 && $DinheiroNaCarteira >= 1000){
    ECHO "Parabéns, você pode fazer a carteira de motorista!";
}
// informa que pessoa está apta

if($IdadePessoa < 18 && $DinheiroNaCarteira >= 1000){
    echo "Infelizmente, você não possui a idade necessária, mas possui o dinheiro necessário para fazer a carteira de motorista.";
}
// informa falta da idade necessária

if($IdadePessoa >= 18 && $DinheiroNaCarteira < 1000){
    echo "Infelizmente, você não possui o dinheiro necessário, mas possui a idade necessária para fazer a carteira de motorista.";
}
// informa falta de dinheiro necessário

if($IdadePessoa < 18 && $DinheiroNaCarteira < 1000){
echo "infelizmente você não possui idade nem dinheiro o suficiente para fazer a carteira de motorista. Guarde mais";
}
// informa falta de dinheiro e idade necessárias

?>