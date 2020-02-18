<?php 

class Coche{

       //PROP.

       private $marca;
       private $matricula;
       private $velocidad;
       private $nivel_combus;
       private $tipo_combus;
   
       //MÉTODOS

       //me gusta más crear mi propio constructor para instanciarlo y setearlo a a vez
       public function __construct($marca,$matricula,$ncombus,$tcombus){
        $this->marca=$marca;
        $this->velocidad=0;
        $this->matricula=$matricula;
        $this->nivel_combus=$ncombus;
        $this->tipo_combus=$tcombus;
       }

       public function sacaCoche(){
           echo "<p>Marca: " .$this->getMarca() ."</p>";
           echo "<p>Velocidad: " .$this->getVelocidad() ."</p>";
           echo "<p>matricula: " .$this->getMatricula() ."</p>";
           echo "<p>Nivel de combustible: " .$this->getNivel_combus() ."</p>";
           echo "<p>Tipo de combustible: " .$this->getTipo_combus() ."</p>";
       }
       
       //setters & getters

        public function setVelocidad($num){
            $this->velocidad=$num;
        }
        public function getVelocidad(){
            return($this->velocidad);
        }


        public function setMatricula($mat){
            $this->matricula=$mat;
        }
        public function getMatricula(){
            return($this->matricula);
        }


        public function setMarca($ojalafueraunferrari){
            $this->marca=$ojalafueraunferrari;
        }
        public function getMarca(){
            return($this->marca);
        }


        public function setNivel_combus($lev){
            $this->nivel_combus=$lev;
        }
        public function getNivel_combus(){
            return($this->nivel_combus);
        }


        public function setTipo_combus($tip){
            $this->tipo_combus=$tip;
        }
        public function getTipo_combus(){
            return($this->tipo_combus);
        }

        //métodos extras

       public function arrancar(){
            $this->setVelocidad(1);
        }

       public function parar(){
        $this->setVelocidad(0);
        }

        public function acelerar(){
            $ahora=$this->getVelocidad();
            $acelerao= $ahora + 5;
            $this->setVelocidad($acelerao);
        }

        public function repostar(){
            $tanque=$this->getNivel_combus();
            $repostao= $tanque + 10;
            $this->setNivel_combus($repostao);
        }
   

}

?>