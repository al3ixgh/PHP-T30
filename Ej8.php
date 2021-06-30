<?php
    class Persona{
        protected $nombre;
        protected $edad;

        public function __construct($nombre,$edad){
            $this->nombre=$nombre;
            $this->edad=$edad;
        }

        public function imprimir(){
            echo $this->nombre.' '.$this->edad;
        }
    }

    class Empleado extends Persona{
        public $sueldo;

        public function __construct($nombre,$edad,$sueldo){
            Persona::__construct($nombre,$edad);
            $this->sueldo=$sueldo;
        }

        public function imprimir(){
            Persona::imprimir();
            echo ' '.$this->sueldo;
        }
    }
    
    $persona1 = new Persona ('Toni',33);
    $persona1->imprimir();
    echo "<br>";
    $empleado1 = new Empleado('Aleix',26,1200);
    $empleado1->imprimir();

?>