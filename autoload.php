<?php

spl_autoload_register(function($clase){
    echo $nombre_archivo=str_replace('\\','/',$clase).".php";
    echo "<br><br>";
    
    if(file_exists($nombre_archivo)){
        require_once $nombre_archivo;
    }
});