<?php 
    class Carta   
    {
        var $suit;
        var $number;

        function __construct($mysuit, $mynumber)
        {
            $this->number=$mynumber;
            $this->suit=$mysuit;
        }
        function setNumber($mynumber){
            $this->number=$mynumber;
        }
        function setSuit($mysuit){
            $this->suit=$mysuit;
        }
        function getNumber(){
            return $this->number;
        }
        function getSuit(){
            return $this->suit;
        }
        function toString()
        {
            echo "la carta es el " .$this->getNumber() ." de " .$this->getSuit() ;
        }
        function getPuntos(){
            if(is_int($this->number)){
                $valor=$this->number;
            }else{
                $valor=0.5;
            }
            return $valor;
        }
    }

?>