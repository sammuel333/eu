<?php
$arr = array();
echo "<hr>";
echo "<h2>exercicio 1</h2>";
$frutas = array("maçã","melão","melancia");
array_unshift($frutas, "abacaxi");
print_r($frutas);
echo "<hr>";
echo "<h2>exercicio 2</h2>";
$cores = array("amarelo","azul","verde","vermelho");
print_r($cores);
echo "<hr>";
echo "<h2>exercicio 3</h2>";
$animais = array("vaca","boi","coelho","macaco","esquilo","elefante","cachorro");
array_push($animais,"jumento");
print_r($animais);
echo "<hr>";
echo "<h2>exercicio 4</h2>";
$dias = array("1-segunda","2-terça","3-quarta","4-quinta","5-sexta","6-sabado","7-domingo");
echo count($dias);
print_r($dias);
echo "<hr>";
echo "<h2>exercicio 5</h2>";
$numeros = array("1","2","3","4","5");

?>