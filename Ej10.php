<?php
    abstract class Persona{
        protected $nombre;
        protected $edad;

        public function cargar($nombre,$edad){
            $this->nombre=$nombre;
            $this->edad=$edad;
        }

        public function imprimir(){
            echo $this->nombre." ".$this->edad;
        }
    }

    class Empleado extends Persona{
        public $sueldo;

        public function cargarSueldo($nombre,$edad,$sueldo){
            Persona::cargar($nombre,$edad);
            $this->sueldo=$sueldo;
        }

        public function imprimir(){
            Persona::imprimir();
            echo " ".$this->sueldo;
        }
    }

    $persona2 = new Empleado();
    $persona2->cargarSueldo('aleix',26,1200);
    $persona2->imprimir();
    //no se puede instanciar una clase abstracta
    $persona1 = new Persona();
    $persona1->cargar('Aleix',26);
    $persona1->imprimir();
?>