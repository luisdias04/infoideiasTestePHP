<?php

namespace Src\Calculos\ConverterAnosParaSeculo;

class SomaPorCriterio
{
    public $valorParaSomar;
    
    function __construct($entradavalor){
        $this->somarPorCriterioDigitosFinais($entradavalor);
    }
    
    public function somarPorCriterioDigitosFinais($entradavalor){
            $contagemCaractere=count($entradavalor);
            $ultimoDigito=$entradavalor[$contagemCaractere-1];
            $penultimoDigito=$entradavalor[$contagemCaractere-2];  
            
            if($contagemCaractere>=2 && $ultimoDigito==0 && $penultimoDigito==0){
                $this->valorParaSomar=0;
            }else{
                $this->valorParaSomar=1;
            } 

        return $this->valorParaSomar;
    }

}