<?php

namespace Src\Calculos\ConverterAnosParaSeculo ;

class SufixoSeculoParaSomar
{
    public $sufixoParaSomar ;
    
    function __construct ($anoEmArray) {
        $this->getSufixo ($anoEmArray) ;
    }
    
    public function getSufixo ($anoEmArray) {
        $caractere =
        count ($anoEmArray) ;
        if ($caractere < 3){
            $this->sufixoParaSomar =
            0 ;
        }else{
            unset ($anoEmArray[$caractere-2]) ;
            unset ($anoEmArray[$caractere-1]) ;
            $this->sufixoParaSomar =
            implode ($anoEmArray) ;       
        }
        return $this->sufixoParaSomar ;       
    }
}