<div class="titulo">Desafio PI</div>

<?php
$pi = 3.1415;
$pi = round($pi,2);
echo $pi;

if($pi === pi()){
  echo "<br>Igual <br>";
}else{
  echo "<br>Diferente<br>";
}

var_dump($pi);
$piErrado = 2.8;
echo "<br>". ($pi - pi());
echo "<br>". (pi() - $piErrado);

if($pi - pi() < 0.0001){
  echo "<br>Proximo<br>";
}else{
  echo "<br>Não Proximo<br>";
}