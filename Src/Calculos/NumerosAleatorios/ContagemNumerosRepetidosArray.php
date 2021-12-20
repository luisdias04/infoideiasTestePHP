<?php

namespace Src\Calculos\NumerosAleatorios;

class contarNumerosRepetidosArray
{
    public $contagemNumeros =
    array () ;

    function __construct ($numerosAleatorios) {
        $this->contarValoresRepetidos ($numerosAleatorios) ;
    }
    
    public function contarValoresRepetidos ($numerosAleatorios) {        
        $this->contagemNumeros =
        array_count_values ($numerosAleatorios) ;
        return $this->contagemNumeros ;        
    }
}