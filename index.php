<?php
// include_once "App/Traits/TecnicasEspeciales.php";
// include_once "App/Traits/TecnicaSimple.php";
// include_once "App/Clases/Saiyajin.php";
// include_once "App/Clases/SuperSaiyajin.php";
// include_once "App/Otras/Saiyajin.php";
include_once "autoload.php";

use \App\Clases\Saiyajin as Saiyan;
use \App\Otras\Saiyajin;
$personA = new Saiyan(name:"Bondi",nivel_pelea: 14222);
$personB = new Saiyajin(nivel_pelea:20058 ,name:"goku");
$personC = new Saiyan(nivel_pelea:40000, name:"Vegeta");
// $personD = new \App\Clases\SuperSaiyan(name: "Nuno", nivel_pelea: 5000);


echo $personA->AumentoVelocidad();
echo "<br>";
echo $personA->Habilidad();
echo "<br>";
echo "<br>";
echo $personC->AumentoVelocidad();
echo "<br>";
echo $personC->ComboFinal();
