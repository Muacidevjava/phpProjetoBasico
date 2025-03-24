<div class="titulo">Variáveis</div>

<?php

$numeroA = 13;
echo $numeroA;
echo "<br>";
var_dump($numeroA);
echo "<br>";
$a = 5;
$b = 20;
$soma = $a + $b;
echo $soma;
echo "<br>";
 echo"<br>";

 echo isset($soma);
 echo "<br>";
 unset($soma);
 var_dump($soma);

 $variavel = 10;
 echo "<br>". $variavel;

 $variavel = "Agora sou uma string";
 echo "<br>". $variavel;
 echo "<br>";

 //nomeclatura de variaveis
 $var = 'valida';
 $var2 = 'valida';
 $VAR = 'valida';
 $_var_4 = 'valida';
 $vâr5 = 'valida mas não é legal'; //evitar!
// $6var = 'invalido';
// $var8% = 'invalido';

echo'<br>' ;
var_dump($_SERVER["HTTP_HOST"]);
echo'<br>' ;
