<?php

namespace Src\View;

require_once'../../vendor/autoload.php';
use Src\Modulos\EntrarAnoSairSeculo\AnoParaSeculo;

$anoParaSeculo= new AnoParaSeculo("101");
$seculo = $anoParaSeculo->seculo;
echo $seculo;