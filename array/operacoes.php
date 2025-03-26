<div class="titulo">Operaçoes com Array</div>

<?php
$dados2 = [
  "nome " => "Maria",
  "idade" => 20,
];

$dados1 = [
  "naturalidade" => "Brasileira",
];

$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);

echo '<br>'. is_array($dadosCompletos);
echo '<br>'. count($dadosCompletos);

echo'<br> ';
$indices = array_rand($dadosCompletos);
echo " $indices = $dadosCompletos[$indices] <br>";

$impares = [1, 3, 5, 7, 9];
$pares = [2, 4, 6, 8, 10];

$decimais = $pares + $impares;
print_r($decimais);
echo '<br>';