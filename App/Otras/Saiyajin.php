<?php
// Clase principal   

namespace App\Otras;

class Saiyajin
{
      use \App\Traits\TecnicaSimple, \App\Traits\TecnicasEspeciales;
    const VELOCIDAD = "Normal";
     public string $name;
     public int $nivel_pelea;

     public static $cabello = "Negro";
    public function __construct($name, $nivel_pelea){
        $this->name = $name;
        $this->nivel_pelea = $nivel_pelea;
    }
    public function Saludar()
    {
        return "Hola, Soy " . $this->name;
    }
    public function Poder()
    {
        return "Mi poder de pelea es de " . $this->nivel_pelea;
    }
    public function GetNombre(){
        return $this->name;
    }
    public function SetNombre($name){
        $this->name = $name; 
    }


    public static function ColorCabello(){
        return self::$cabello;
    }

    public static function NewMethod(){
        return self::ColorCabello() . " ". self::VELOCIDAD . "y" .   "<br>";
    }
}

