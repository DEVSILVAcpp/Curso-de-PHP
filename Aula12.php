<?php
//Arrays
$carros = array(1=>"BMW",2=>"Veloster",3=>"Hilux");
$carros[] = "Amarok";
$carros[10] = "Camaro";
echo $carros[10];
echo "<br>";

$motos = array();
$motos[] = "Yamara";
$motos[] = "Honda";
$motos[5] = "Suzuki";
echo $motos[5];
echo "<br>";

$clientes = ["Rodrigo", "Felipe", "bia"];
print_r($clientes);
echo "<hr>";