<?php

namespace Src\Modulos\Primos;

use Src\Calculos\NumerosPrimos\Primos;
use Src\Calculos\NumerosPrimos\PrimosRetirarV1V2;

class PrimosSemVrsEntradas{

    public $primosSemEntradas;

    function __construct($valor1,$valor2){
        $this->getPrimosSemV1V2($valor1,$valor2);
    }

    public function getPrimosSemV1V2($valor1,$valor2){
        $a=array_reduce((array) new Primos($valor1,$valor2),'array_merge',array());        
        $b= new PrimosRetirarV1V2($valor1,$valor2,$a);
        $this->primosSemEntradas=$b->primosSemAsEntradas;        
    }
}