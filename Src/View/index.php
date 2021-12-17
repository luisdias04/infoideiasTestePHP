<?php

namespace Src\View;

require_once'../../vendor/autoload.php';
use Src\Modulos\EntrarAnoSairSeculo\AnoParaSeculo;
use Src\Modulos\Primos\PrimosSemVrsEntradas;

$digiteAnoParaconverterEmSeculo=20265;
$primosV1=5;
$primosV2=20;

$anoParaSeculo= new AnoParaSeculo($digiteAnoParaconverterEmSeculo);
$seculo = $anoParaSeculo->seculo;
echo "O Século do ano $digiteAnoParaconverterEmSeculo = $seculo<br/>";
echo"Primos com valores informados retirado:";
 
$primosExcetoValorDeEntrada=new PrimosSemVrsEntradas($primosV1,$primosV2);
foreach($primosExcetoValorDeEntrada->primosSemEntradas as $valor){
    echo $valor.",";
}
echo "<br/> O Array de valores aleatórios são : ";

$numeros=array();
for($cont=0;$cont<20;$cont++){
    for($i=0;$i<20;$i++){    
        array_push($numeros,rand(1,10));        
    }
    echo $numeros[$cont].",";
}
