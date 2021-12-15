<?php

namespace Src\Calculos\ConverterAnosParaSeculo;

class SomaPorCriterio
{
    private $valorParaSomar;
    
    function __construct($entradavalor){
        somarPorCriterioImpar($entradavalor);
    }
    
    public function somarPorCriterioImpar($entradavalor){       
        
            if($entradavalor%2 != 0){
                    $this->valorParaSomar=1;
            }else{
                $this->valorParaSomar=0;
            }

        return $this->valorParaSomar;
    }

}