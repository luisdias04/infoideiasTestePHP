<?php

namespace Src\View;

require_once'../../vendor/autoload.php';

use Src\Modulos\EntrarAnoSairSeculo\AnoParaSeculo;

$pegarSeculo= new AnoParaSeculo(2021);
print_r($pegarSeculo);