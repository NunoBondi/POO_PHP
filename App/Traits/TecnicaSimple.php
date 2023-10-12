<?php
namespace App\Traits;

    trait TecnicaSimple{
        public function AumentoVelocidad(){
            return $this->GetNombre()  ." Ha aumentado su velocidad";
        }
        public function Habilidad(){
            return  $this->GetNombre()  . " Ha lanzado un keinza";
        }
    }