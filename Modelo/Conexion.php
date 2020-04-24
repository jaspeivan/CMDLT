<?php

try{

$con = new PDO("mysql:host=localhost; dbname=CMDLT",'root','');

$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$con->exec("SET CHARACTER SET UTF8");

}catch(Exception $e){

echo "Error en la linea: ".getLine();

echo "Error en: ".getMassager();

}





?>