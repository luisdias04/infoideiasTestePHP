<?php

namespace Src\Calculos\NumerosPrimos;

class PegarNumerosPrimos{

    public $primos=array();

    function __construct($valor1,$valor2){
        $this->getPrimos($valor1,$valor2);
    }

    public function getPrimos($valor1,$valor2){
        $arrayPrimos=array();
        for(
            $contagemInicial = $valor1; 
            $contagemInicial <= $valor2; 
            $contagemInicial++
            ){            
            $divisores = 0;            
            for(
                $contagemModulo = $contagemInicial; 
                $contagemModulo >= 1; 
                $contagemModulo--
                ){                
                if (($contagemInicial % $contagemModulo) == 0) {
                    $divisores++;
                }
            }            
            if ($divisores == 2){
               array_push($arrayPrimos,$contagemInicial);
            }
            $this->primos=$arrayPrimos;
        }
        return $this->primos;
    }
}