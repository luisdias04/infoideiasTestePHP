<?php

namespace Src\Calculos\NumerosPrimos ;

class PrimosRetirarV1V2
{
    public $primosSemAsEntradas;
    
    function __construct($valor1, $Valor2, $sequenciaPrimos) {
        $this->getPrimosSemAsEntradas ($valor1, $Valor2, $sequenciaPrimos) ;
        $this->getPrimosSemV1eV2() ;
    }
    
    public function getPrimosSemAsEntradas ($valor1, $Valor2, $sequenciaPrimos) {
        $itensEmPrimos =
        count ($sequenciaPrimos) ;
        if ($sequenciaPrimos[0] == $valor1) {
            unset ($sequenciaPrimos[0]) ;
        } else if ($sequenciaPrimos[$itensEmPrimos - 1] == $Valor2) {
            unset ($sequenciaPrimos[$itensEmPrimos - 1]) ;                
        }
        $this->primosSemAsEntradas = 
        $sequenciaPrimos ;
    }

    public function getPrimosSemV1eV2 () {
        return $this->primosSemAsEntradas ;
    }
}