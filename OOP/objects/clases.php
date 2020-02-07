<?php 
class Person {

    //propiedades

    private $name;
    private $dni;
    private $address;

    //métodos

    //SETTERS
    public function __construct($new_name,$new_address,$new_dni)
    {
        $this->name=$new_name;
        $this->address=$new_address;
        $this->dni=$new_dni;
    }
    public function setName($new_name)
    {
        $this->name=$new_name;
    }
    public function setAddress($new_address)
    {
        $this->address=$new_address;
    }
    public function setDni($new_dni)
    {
        $this->dni=$new_dni;
    }

    //GETTERS

    public function getName()
    {
        return $this->name;
    }
    
    public function getDni()
    {
        return $this->dni;
    }   
    public function getAddress()
    {
        return $this->address;
    }

    /*OTRAS*/

    public function toString(){
        echo  "This person si called " .$this->getName() .", his dni is " .$this->getDni() .", and his address is " .$this->getAddress() .".";
    }

}

