<?php

namespace Src\View ;

require_once'../../vendor/autoload.php' ;
use Src\Modulos\EntrarAnoSairSeculo\AnoParaSeculo ;
use Src\Modulos\Primos\PrimosSemVrsEntradas ;

$digiteAnoParaconverterEmSeculo = 
2021 ;
$primosV1 = 
5 ;
$primosV2 = 
20 ;

$anoParaSeculo = 
new AnoParaSeculo ($digiteAnoParaconverterEmSeculo) ;
$seculo = 
$anoParaSeculo->seculo ;
echo 
"O Século do ano $digiteAnoParaconverterEmSeculo = $seculo <br/>" ;
echo 
"Primos com valores inicial e final retirado, caso houver: " ;
 
$primosExcetoValorDeEntrada = 
new PrimosSemVrsEntradas ($primosV1, $primosV2);

foreach ($primosExcetoValorDeEntrada->primosSemEntradas as $valor){
    echo 
    $valor . "," ;
}

echo
"<br/> O Array de valores aleatórios são: " ;

$numerosAleatorios = 
array () ;
$indiceNumerosAleatorios ;
$numerosNaoRepetidos = 
array () ;

for ($i = 0 ; $i < 20 ; $i++){    
array_push ($numerosAleatorios, rand(1,10));
echo $numerosAleatorios[$i] . ",";
}

$contagemNumeros = 
array_count_values ($numerosAleatorios) ;
$indiceNumerosAleatorios = 
array_keys ($contagemNumeros) ;

echo
"<br/>Dos 20 números aleatórios, os que não se repetem são: " ; 

foreach ($indiceNumerosAleatorios as $key){
    if ($contagemNumeros[$key] == 1){
        array_push ($numerosNaoRepetidos, $key) ;
        echo "$key," ;
    }
}