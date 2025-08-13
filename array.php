<?php
echo "<h2>ARREYS</h2>";
echo "um array é na verdade, um mapa ordenado. ou seja, é um tipo que relaciona valores a chaves.<br>portanto, é uma lista de valores que serão armazenados na memória.</br>";
echo "<hr>";
echo "<h2>criando um array</h2>";
$arr = ["primeiro","segundo","terceiro"];
print_r($arr);
echo "<hr>";
echo "<h2>outra maneira de criar um array</h2>";
$arr = array ("primeiro","segundo","terceiro");
print_r($arr);
echo "<hr>";
echo "<h2>utilizando o índice do array</h2>";
$arr = array ("primeiro","segundo","terceiro");
echo $arr[1];
echo "<hr>";
echo "<h2>array associativo</h2>";
$arr = array ("nome"=>"alberto","sobrenome"=>"roberto","idade"=>"54");
echo "nome: ".$arr["nome"]."<br>";
echo "sobrenome: ".$arr["sobrenome"]. "<br>";
echo "idade: ".$arr["idade"]. "<br>";
echo "<hr>";
echo "<h2>array muitidimensional</h2>";
$arr = array(
    array("primeiro", "segundo"),
    array("terceiro", "quarto")
);
print_r($arr);
echo "<br>";
print_r($arr[0]);
echo "<br>";
echo $arr[1][1];
echo "<hr>";
echo "<h2>contando os elementos de um array</h2>";
$numeros = [1,2,300,7000,23,56,89,21,54,34,345];
echo count($numeros);
echo "<hr>";
echo "<h2>adicionando dinamicamente elementos em um array</h2>";
$arr = array();
$arr[] = "azul";
$arr[] = "vermelho";
$arr[] = "amarelo";
print_r($arr);
echo "<hr>";
echo "<h2>adicionando no inicio do array</h2>";
$frutas = array("maçã","melão","melancia");
array_unshift($frutas, "abacaxi");
print_r($frutas);
echo "<hr>";
echo "<h2>removendo o promeiro do array</h2>";
array_shift($frutas);
print_r($frutas);
echo "<hr>";
echo "<h2>procurando um elemento no array</h2>";
$frutas = array ("maçã","melão","melancia","uva","goiaba");
$proc = "arroz";
$index = array_search($proc, $frutas);
if ($index !== false) {
    echo "O elemento $proc esta na posição $index";
} else {
    echo "elemento não encontrado!";
}

?>