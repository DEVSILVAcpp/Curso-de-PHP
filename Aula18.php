<?php

/*$frase = "Meu nome não é johnny";
$array = explode(" ", $frase);

print_r($array);
*/

$nomes = array("Rodrigo", "Carlos", "Neusa", "Talita");
$string = implode(", ", $nomes);
echo $string;