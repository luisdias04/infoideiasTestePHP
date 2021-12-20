<?php
namespace Src\Calculos\NumerosAleatorios;

class NumerosAleatorios
{
    public $numerosAleatorios = 
    array () ;

    function __construct (
                            $quantidadeNumerosAleatorios , 
                            $deValorInicial , 
                            $ateValorFinal
                         ) {

        $this->criarNumerosAleatorios (
                                        $quantidadeNumerosAleatorios , 
                                        $deValorInicial , 
                                        $ateValorFinal
                                      ) ;
    }

    public function  criarNumerosAleatorios (
                                                $quantidadeNumerosAleatorios , 
                                                $deValorInicial , 
                                                $ateValorFinal
                                            ) {
        for ($i = 0 ; $i < $quantidadeNumerosAleatorios ; $i++) {    
        array_push ($this->numerosAleatorios, rand ($deValorInicial, $ateValorFinal));       
        }
        return $this->numerosAleatorios ;
    }
}