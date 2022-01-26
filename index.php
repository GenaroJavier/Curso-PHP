<?php 
    /**
     * Un metodo estatico es un metodo que podemos invocar sin tener una instancia
     */

    class Carro {
        
        //Metodo estatico
        public static function encender() {
            echo "Carro encendido"; 
        }
    }

    //Asi podemos invocar un metodo estatico
    Carro::encender(); 
?>
