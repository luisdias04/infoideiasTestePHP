<?php

namespace Src\View;

require_once'../../vendor/autoload.php';
use Src\Modulos\EntrarAnoSairSeculo\AnoParaSeculo;
use Src\Modulos\Primos\PrimosSemVrsEntradas;

$anoParaSeculo= new AnoParaSeculo("101");
$seculo = $anoParaSeculo->seculo;
echo "$seculo<br/>";
 
$primosExcetoValorDeEntrada=new PrimosSemVrsEntradas(4,97);
foreach($primosExcetoValorDeEntrada->primosSemEntradas as $valor){
    echo $valor.",";
}