<?php
    abstract class Operacion{
        protected $valor1;
        protected $valor2;
        protected $resultado;

        public function cargar1($v1){
            $this->valor1=$v1;
        }

        public function cargar2($v2){
            $this->valor2=$v2;
        }

        public function imprimir(){
            echo $this->resultado."<br>";
        }
    }

    class Suma extends Operacion{
        public function operar(){
            $this->resultado=$this->valor1+$this->valor2;
        }

        public function resultado(){
            Operacion::imprimir();
        }
    }

    class Resta extends Operacion{
        public function operar(){
            $this->resultado=$this->valor1-$this->valor2;
        }

        public function resultado(){
            Operacion::imprimir();
        }
    }

    $suma1 = new Suma;
    $suma1->cargar(2,5);
    $suma1->operar();
    $suma1->resultado();
?>