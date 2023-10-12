<?php

namespace App\Traits;
trait TecnicasEspeciales{
    
    public function Teletransportacion(){
        return $this->GetNombre(). "Ha utilizado la Teletransportacion";
    }

    public function Genkidama(){
        return $this->GetNombre()." Ha utilizado el Genkidama";
    }
    Public function ComboFinal(){
        return $this->Teletransportacion() . " y tambien ". $this->Genkidama();
    }
}