<?php

    class Ovni{
        private $strColor1;
        private $strColor2;
        private $strForma;

        function __construct(string $color1, string $color2,string $forma){
            $this -> strColor1 = $color1;
            $this -> strColor2 = $color2;
            $this -> strForma = $forma;
        }

        public function getColor1(){
            return $this -> strColor1;
        }
        public function getColor2(){
            return $this -> strColor2;
        }
        public function getForma(){
            return $this -> strForma;
        }


    }

?>