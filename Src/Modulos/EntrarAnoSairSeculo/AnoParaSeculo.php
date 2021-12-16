<?php

namespace Src\Modulos\EntrarAnoSairSeculo;

//require_once'../../../vendor/autoload.php';

use Src\Calculos\ConverterAnosParaSeculo\ValidarEntradaDeValores;
use Src\Calculos\ConverterAnosParaSeculo\ConverterNumerosParaArray;
use Src\Calculos\ConverterAnosParaSeculo\SomaPorCriterio;
use Src\Calculos\ConverterAnosParaSeculo\SufixoSeculoParaSomar;



class AnoParaSeculo
{
    public $seculoValido=false;
    public $seculo;
    public $ValidarEntradaDeValores;
    public $ConverterNumerosParaArray;
    public $SomaPorCriterio;
    public $SufixoSeculoParaSomar;    
    

    function __construct($anoParaSeculo){
        $a= new ValidarEntradaDeValores($anoParaSeculo);
        $this->seculoValido= ($a->anoValidado==-1)?false:true;

        if(!$this->seculoValido || !is_numeric($anoParaSeculo)){
            $this->seculo="Ano inválido ou não faz parte dos numeros naturais maior que zero!";            
        }else{
            $b= array_reduce((array) new ConverterNumerosParaArray($a->anoValidado),'array_merge',array());
            $c=new SomaPorCriterio($b);
            $d=new SufixoSeculoParaSomar($b);
            $this->ValidarEntradaDeValores=$a;
            $this->ConverterNumerosParaArray=$b;
            $this->SomaPorCriterio=$c;
            $this->SufixoSeculoParaSomar=$d;
            $this->getSeculo();
        }
    }

    public function getSeculo(){
        $this->seculo=        
        $a= $this->SufixoSeculoParaSomar->sufixoParaSomar +        
        $b= $this->SomaPorCriterio->valorParaSomar;
        return $this->seculo;
    }
}