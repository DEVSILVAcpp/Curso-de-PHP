<?php
$nome = "josias gabriel da silva";
$a = 1;
$b = 3;
$c = 7;

// ESCOPO GLOBAL
function exibeNome() {
	global $nome;
	echo $nome;
}

exibeNome();
echo "<hr>";
///////////////////////////////////

function exibeCidade() {
	global $cidade;
	$cidade =  "Rio de Janeiro";
}

exibeCidade();
echo $cidade;
echo "<hr>";
/////////////////////////////////////

function Soma() {
	echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();