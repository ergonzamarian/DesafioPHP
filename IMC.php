<?php

$peso = 60;
$altura = 1.81;
$imc = $peso/($altura ** 2);
if ($imc >= 18.5 and $imc <=24.9) {
    echo "Seu IMC é $imc, você está dentro do normal!!";
}
elseif($imc >24.9) {
    echo "Seu IMC é $imc, você está acima do normal!!";
}
else{
    echo "Seu IMC é $imc, você está abaixo do normal!!";
}