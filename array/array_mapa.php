<div class="titulo">Array Mapa</div>

<?php
 $dados = array ( 
  "idade" => 25,
  "cor" => "verde",
  "peso" => 49.5

 );
 print_r($dados);
 echo '<br>';

 var_dump($dados[0]);
 echo '<br>';

 var_dump($dados["idade"]);
 echo '<br>';

 var_dump($dados["cor"]);
 echo '<br>';

 var_dump($dados["peso"]);
 echo '<br>';

 $lista = array(
   "a",
   "cinco" => "b",
   "c",
   8 => "d",
   "e",
   6 => "f",
   "g",
   8 => "h",
 );

 echo '<br>';
 print_r($lista);
 echo '<br>';

 $lista ['vinte'] = 'j';
 echo '<br>';
 print_r($lista);
 echo '<br>';

 $lista[false] = 'tentei indexar com false';
 echo '<br>';
 print_r($lista);

 $lista[true] = 'tentei indexar com true';
 echo '<br>';
 print_r($lista);