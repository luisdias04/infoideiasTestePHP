<?php

namespace Src\Calculos\ConverterAnosParaSeculo;

class ConverterNumerosParaArray
{
    private $numerosEmArray=array();    
    
    public function converter($numerosParaConverter){
        $this->numerosEmArray = str_split($numerosParaConverter);
    }
}