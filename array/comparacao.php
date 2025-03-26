<div class="titulo">Comparação  Arrays</div>

<?php
$arr1 = [
    'a' => 'vermelho',
    'b' => 'verde',
    'c' => 'azul',
];

$arr2 = [
    'c' => 'azul',
    'a' => 'vermelho',
    'b' => 'verde',
];

$arr3 = [
  'a' => 'laranja',
    'b' => 'roxo',
    'c' => 'azul',
];


var_dump($arr1 == $arr2);
echo '<br>';
var_dump($arr1 === $arr3);  
echo '<br>';
var_dump($arr1 !== $arr2);
echo '<br>';
var_dump($arr1 === $arr2);
echo '<br>';
var_dump($arr1 != $arr3);