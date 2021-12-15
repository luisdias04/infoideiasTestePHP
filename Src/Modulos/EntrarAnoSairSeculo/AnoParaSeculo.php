<?php

namespace Src\Modulos\EntrarAnoSairSeculo;

require_once'../../../vendor/autoload.php';

use Src\Calculos\ConverterAnosParaSeculo\ConverterNumerosParaArray;
use Src\Calculos\ConverterAnosParaSeculo\SomaPorCriterio;
use Src\Calculos\ConverterAnosParaSeculo\SufixoSeculoParaSomar;
use Src\Calculos\ConverterAnosParaSeculo\ValidarEntradaDeValores;

//$a=new ValidarEntradaDeValores("100");
$b=new ConverterNumerosParaArray(112132100);
//$c=new SomaPorCriterio(201);
$teste=(array)$b;
//$teste[0]=1;
//$teste[1]=2;
//$teste[2]=3;
//$teste[3]=4;
//$teste[4]=5;
//$teste[5]=6;
$d=new SufixoSeculoParaSomar($teste);

print_r($teste);




/*
class AnoParaSeculo
{
    private $saidaAoDigitarUmSupostoValorParaAno;
    
    function __construct($EntradaAnos){
        $this->getSeculo($EntradaAnos);
    }
    
    public function getSeculo($EntradaAnos){
        $valor=new ValidarEntradaDeValores($EntradaAnos);
        print_r($valor);

        


    }
}

$a=new AnoParaSeculo("2021");
print_r($a);
*/