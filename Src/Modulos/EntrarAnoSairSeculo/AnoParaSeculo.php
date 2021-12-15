<?php

namespace Src\Modulos\EntrarAnoSairSeculo;

use Src\Calculos\ConverterAnosParaSeculo\ConverterNumerosParaArray;
use Src\Calculos\ConverterAnosParaSeculo\SomaPorCriterio;
use Src\Calculos\ConverterAnosParaSeculo\SufixoSeculoParaSomar;
use Src\Calculos\ConverterAnosParaSeculo\ValidarEntradaDeValores;

$a=new SomaPorCriterio(2001);

print_r($a);







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