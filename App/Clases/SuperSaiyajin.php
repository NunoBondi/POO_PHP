<?php
include_once "./App/Traits/TecnicaSimple.php";
// include "./App/Clases/Saiyajin.php";



class SuperSaiyan extends \App\Clases\Saiyajin{


    public function Transformation(){
        if($this->nivel_pelea > 50000){
            return "Soy un SuperSaiyajin";
        }
        else{
            return "No soy en lo absoluto un SuperSaiyajin";
        }
    }
    public function Poder()
    {
        $nivel = $this->nivel_pelea*2;
        return "Mi poder de pelea es de " . $nivel;
    }
}
