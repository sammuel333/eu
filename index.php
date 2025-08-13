<?php
$nome = "sammuel";
$idade = "16 anos";
echo "<center><h2>Ola professor</center></h2>";
echo "<center><h4>meu nome é $nome e tenho $idade</center></h4>";
echo "<hr>";
$frutas = ["maçã", "banana", "laranja", "uva", "melancia",];
foreach ($frutas as $fruta) {
    echo $fruta. "<br>";
}
echo "<hr>";
$numero = 19;
if ($numero%2 == 0) {
    echo "<center><h2>par</center></h2>";
} else {
    echo "<center><h2>impar</center></h2>";
}
?>
