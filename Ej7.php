<?php
    class Operacion{
        protected $valor1;
        protected $valor2;
        protected $resultado;

        public function __construct($v1,$v2){
            $this->valor1=$v1;
            $this->valor2=$v2;
        }
    }

    class Suma extends Operacion{
        public $titulo;
        public function __construct($v1,$v2,$tit){
            Operacion::__construct($v1,$v2);
            $this->titulo=$tit;
        }

        public function result(){
            echo $this->titulo;
            echo $this->valor1+$this->valor2;
        }
    }

    $suma1 = new Suma(2,5,'Una suma ');
    $suma1->result();



?>