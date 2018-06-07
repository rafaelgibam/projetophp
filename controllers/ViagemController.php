<?php

namespace controllers;

use models\Viagem;

class ViagemController
{

    private $viagem;

    public function __construct()
    {
        $this->viagem = new Viagem();
    }

    public  function  cadastraViagem($destino, $transporte, $nivel, $translado, $descricao, $diarias, $tipo, $usuario){


        $this->viagem->setDestino($destino);
        $preco = $this->calculaPreco($destino, $transporte, $diarias);
        $this->viagem->setPreco($preco);
        $this->viagem->setTransporte($transporte);
        $this->viagem->setNivelhotel($nivel);
        $this->viagem->setTranslado($translado);
        $this->viagem->setDescricao($descricao);
        $this->viagem->setDiarias($diarias);
        $this->viagem->setTipo($tipo);
        $this->viagem->setUsuarioid($usuario);

        if($this->viagem->getDestino() !=null){
            $this->viagem->insert();
            header("location: /viagem/listaviagem.php?msg=salvo");
        }

}
    public function calculaPreco($destino, $transporte, $diarias){

        $total = null;

        if($destino == "Recife"){
            if($transporte== "Aviao" && $diarias== "Tres"){
                $total = "R$3.000,00";
            }
            elseif ($transporte== "Aviao" && $diarias== "Dois") {
                $total = "R$2.500,00";
            }
            elseif ($transporte== "Aviao" && $diarias== "Um") {
                $total = "R$1.500,00";
            }

            if ($transporte== "Navio" && $diarias== "Tres") {
                $total = "R$4.000,00";
            }
            elseif ($transporte== "Navio" && $diarias== "Dois") {
                $total = "R$3.500,00";
            }
            elseif ($transporte== "Navio" && $diarias== "Um") {
                $total = "R$2.500,00";
            }

            if ($transporte== "Onibus" && $diarias== "Tres") {
                $total = "R$1.500,00";
            }elseif ($transporte== "Onibus" && $diarias== "Dois") {
                $total = "R$3.500,00";
            }
            elseif ($transporte== "Onibus" && $diarias== "Um") {
                $total = "R$2.500,00";
            }
        }

        elseif ($destino == "Natal") {
            if($transporte== "Aviao" && $diarias== "Tres"){
                $total = "R$3.000,00";
            }
            elseif ($transporte== "Aviao" && $diarias== "Dois") {
                $total = "R$2.500,00";
            }
            elseif ($transporte== "Aviao" && $diarias== "Um") {
                $total = "R$800,00";
            }

            if ($transporte== "Navio" && $diarias== "Tres") {
                $total = "R$6.000,00";
            }
            elseif ($transporte== "Navio" && $diarias== "Dois") {
                $total = "R$4.500,00";
            }
            elseif ($transporte== "Navio" && $diarias== "Um") {
                $total = "R$3.500,00";
            }

            if ($transporte== "Onibus" && $diarias== "Tres") {
                $total = "R$3.500,00";
            }
            elseif ($transporte== "Onibus" && $diarias== "Dois") {
                $total = "R$2.500,00";
            }
            elseif ($transporte== "Onibus" && $diarias== "Um") {
                $total = "R$500,00";
            }


        }
        elseif ($destino == "Sirinhaem") {
            if($transporte== "Aviao" && $diarias== "Tres"){
                $total = "R$1.000,00";
            }
            elseif ($transporte== "Aviao" && $diarias== "Dois") {
                $total = "R$700,00";
            }
            elseif ($transporte== "Aviao" && $diarias== "Um") {
                $total = "R$500,00";
            }

            if ($transporte== "Navio" && $diarias== "Tres") {
                $total = "R$2.000,00";
            }
            elseif ($transporte== "Navio" && $diarias== "Dois") {
                $total = "R$1.500,00";
            }
            elseif ($transporte== "Navio" && $diarias== "Um") {
                $total = "R$500,00";
            }


            if ($transporte== "Onibus" && $diarias=="Tres") {
                $total = "R$800,00";
            }
            elseif ($transporte== "Onibus" && $diarias== "Dois") {
                $total = "R$500,00";
            }
            elseif ($transporte== "Onibus" && $diarias== "Um") {
                $total = "R$350,00";
            }

        }

        elseif ($destino == "Porto") {
            if($transporte== "Aviao" && $diarias== "Tres"){
                $total = "R$4.000,00";
            }
            elseif ($transporte== "Aviao" && $diarias== "Dois") {
                $total = "R$3.500,00";
            }
            elseif ($transporte== "Aviao" && $diarias== "Um") {
                $total = "R$2.500,00";
            }


            if ($transporte== "Navio" && $diarias== "Tres") {
                $total = "R$6.000,00";
            }
            elseif ($transporte== "Navio" && $diarias== "Dois") {
                $total = "R$4.500,00";
            }
            elseif ($transporte== "Navio" && $diarias== "Um") {
                $total = "R$3.500,00";
            }

            if ($transporte== "Onibus" && $diarias== "Tres") {
                $total = "R$3.500,00";
            }
            elseif ($transporte== "Onibus" && $diarias== "Dois") {
                $total = "R$2.500,00";
            }
            elseif ($transporte== "Onibus" && $diarias== "Um") {
                $total = "R$500,00";
            }
        }

      return  $total;
    }


}