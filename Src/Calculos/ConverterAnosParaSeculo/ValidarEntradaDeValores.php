<?php

namespace Src\Calculos\ConverterAnosParaSeculo;

class ValidarEntradaDeValores
{
    private $anoValidado;
    
    function __construct($EntradaAnos){
        $this->validarAno($EntradaAnos);
    }
    
    public function validarAno($EntradaAnos){
        if(is_numeric($EntradaAnos) && $EntradaAnos>0){
            $this->anoValidado=$EntradaAnos;
        }else{
            $this->anoValidado=-1;         
        }
        return $this->anoValidado;        
    }
}