<div class="titulo">Repetição Foreach</div>

<?php

 $lista  = [ 1=>'Domingo', 2=>'Segunda', 3=>'Terça', 4=>'Quarta', 5=>'Quinta', 6=>'Sexta', 7=>'Sábado'];

 foreach ($lista as $item) {
   echo "<p>$item</p>";
 }

 $array = [
   'nome'=>'Maria',
   'idade'=>20,
   'profissao'=>'programadora'
 ];

 foreach ($array as $key => $value) {
   echo "<p>$key = $value</p>";
 }  

 $matrix = [
   ['a','e','i','o','u'],
   ['b','c','d']
 ];
 foreach($matrix as $linha) {
    foreach($linha as $coluna) {
      echo "<p>$coluna</p>";
    }
 }
?>