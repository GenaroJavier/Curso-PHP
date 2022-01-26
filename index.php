<?php 
    class persona {
        /** Visibilidad de los datos
         * Nos referimos al tipo de acceso que se le asigna a las variables
         * por ejemplo un variable public puede ser invocada desde cualquier parte del codigo. 
         * A contrario que una variable de tipo private que solo puede ser utilizada dentro de la
         * misma clase, si nosotros queremos hacer eso de esta, es necesario que la retornemos 
         * por medio de un metodo. 
         */
        public $nombre; 
        private $edad; 
        protected $direccion;

        public function asignarNombre($nuevoNombre) {
            $this->nombre=$nuevoNombre; 
        }

        public function imprimirNombre() {
            return $this->nombre; 
        }

        //Metodo para retornar edad
        public function imprimirEdad($nuevaEdad){
            $this->edad = $nuevaEdad; 
            echo "<br>".$this->edad; 
        }
    }

    $alumno = new persona(); //instanciar
    $alumno->asignarNombre("Genaro");
    $alumno->imprimirNombre();     

    $alumno2 = new persona(); 
    $alumno2->asignarNombre("Paulina"); 
    $alumno2->imprimirNombre();  
    $alumno2->imprimirEdad(18); 

    class Trabajador extends persona {
        public $puesto; 

        public function asignarPuesto($nuevoPuesto) {
            $this->puesto = $nuevoPuesto; 
        }

        public function mostrarPuesto() {
            return $this->puesto; 
        }
    }

    $trabajador1 = new Trabajador(); 
    $trabajador1->asignarNombre("Cesáreo Sánchez Chávez"); 
    $trabajador1->asignarPuesto("Programador");

   echo "<br> Hola mi nombre es: ".$trabajador1->imprimirNombre()." soy un humilde ".$trabajador1->mostrarPuesto();



?>
