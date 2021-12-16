<?php

namespace Src\Calculos\ConverterAnosParaSeculo;

class ConverterNumerosParaArray
{
    private $numerosEmArray=array();
    
    function __construct($numerosParaConverter){
        $this->converter($numerosParaConverter);
    }
    
    public function converter($numerosParaConverter){
        $this->numerosEmArray = str_split($numerosParaConverter);
        return (array)$this->numerosEmArray;
    }
    
}