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

//Count
$totalClientes = count($clientes);
echo $totalClientes;
echo "<hr>";

//Foreach
foreach ($carros as $valor) {
	echo $valor."<br>";
}
echo "<hr>";

// Arrays associativos 
$pessoa = array("nome"=> "Rodrigo", "Idade"=> 20, "Altura"=> 1.83);
$pessoa["cidade"] = "Itabuma";

foreach($pessoa as $indice => $valor) {
	echo $indice.":".$valor."<br>";
}

echo "<hr>";
//Arrays multidimensionais
$times = array(
	"cariocas"=> array("campeao"=>"vasco", "vice"=>"flamengo", "terceiro"=>"botafogo"),
	"paulista"=> array("santos", "sao paulo", "palmeiras"),
    "baianos"=> array("bahia", "vitoria", "itabuna"));

echo $times["paulista"][1];
echo "<br>";
foreach($times["cariocas"] as $indice => $valor){
	echo $indice.":".$valor."<br>";
}