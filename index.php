<?php 
    class Persona {
        public $nombre; 
        public $edad; 
        public $direccion; 
        public $puesto; 
        
        function __construct($nuevoNombre, $nuevoEdad, $nuevoDireccion, $nuevoPuesto){
            $this->nombre=$nuevoNombre; 
            $this->edad=$nuevoEdad; 
            $this->direccion=$nuevoDireccion; 
            $this->puesto=$nuevoPuesto; 
        }

        function Presentar() {
            return "<br> Hola mi nombre es: ".$this->nombre." <br> tengo: ".$this->edad."años <br> vivo en: ".$this->direccion."<br> Actualmente soy un: ".$this->puesto; 
        }

    }

    $Genaro = new Persona("Genaro Javier", 21, "C. Tlaxcala s/n Col. Morelos", "Programador"); 
    echo $Genaro->Presentar(); 

?>
