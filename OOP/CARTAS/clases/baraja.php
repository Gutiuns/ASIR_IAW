<?php 
    require_once ('carta.php');
    class Baraja
    {
        var $mibaraja;   

        function __construct(){
            $arrayNumerosCartas= array(
                1,
                2,
                3,
                4,
                5,
                6,
                7,
                'sota',
                'caballo',
                'rey',
            );
            $arrayPalos= array(
                'bastos','espadas','oros','copas'
            );
            foreach ($arrayPalos as $palo){
                foreach($arrayNumerosCartas as $numero){           
                    $this->mibaraja[]= new Carta($palo, $numero);
                }
            }   

    
        }
        function __toString(){
            foreach ($this->mibaraja as $carta){
                $carta->toString();
            }
        }
        function setBaraja($newBaraja){
            $this->mibaraja=$newBaraja;
        }
        function getBaraja(){
            return($this->mibaraja);
        }
        function barajar(){
            shuffle($this->mibaraja);
        }
        function darCarta(){
            $this->barajar();
            $carta=$this->mibaraja[0];
            unset ($this->mibaraja[0]);           
            $primero=current($this->mibaraja);
            return ($carta);       
        }
        function guardarCarta($micarta){
            $this->barajar();
            $this->mibaraja[]=$micarta;
        }
    }
?>