<?php
//Constantes
define("NOME", "Josias Gabriel da Silva");
define("IDADE", 20);
define("ALTURA", 1.83);
define("CASADO", true);

define('TIMES', ['santos', 'flamengo', 'santos']);

echo "Meu nome é ".NOME.", minha idade é ".IDADE." e minha altura é ".ALTURA.'.';
echo "<hr>";
echo TIMES[0];
echo "<hr>";

var_dump(TIMES);

function exibeNome() {
	echo NOME;
}

exibeNome();

