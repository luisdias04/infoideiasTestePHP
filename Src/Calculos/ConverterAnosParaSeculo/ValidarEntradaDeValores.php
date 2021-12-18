<?php

namespace Src\Calculos\ConverterAnosParaSeculo ;

class ValidarEntradaDeValores
{
    public $anoValidado ;
    
    public function __construct ($EntradaAnos) {
        $this->validarAno ($EntradaAnos) ;
    }
    
    public function validarAno ($EntradaAnos) {
        if (is_numeric ($EntradaAnos) && $EntradaAnos > 0) {
            $EntradaAnos =
            preg_replace('/[^0-9]/', '', $EntradaAnos) ;
            $this->anoValidado =
            $EntradaAnos ;
        } else {
            $this->anoValidado =
            -1 ;         
        }
        return $this->anoValidado ;        
    }
}