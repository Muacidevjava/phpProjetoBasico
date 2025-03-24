<div class="titulo">Interpolação</div>

<?php
  $numero = 10;
  echo $numero;
  echo '<br> $numero';
  echo "<br> $numero";
  echo "<br> $numero + 1";

  $texto = "Sua nota final é: $numero";
  echo "<br> $texto"; 

  $objeto = 'caneta';
  echo "<br> Eu tenho 5 $objetos";
  echo "<br> Eu tenho 5 {$objeto}s";
  echo "<br> Eu tenho 5 { $objeto}s mas perdi 3 {$objeto }s"; //não pode ter espaço antes do }  
  
  echo "<br>";
  echo "$numero";
  echo "<br>";
  echo "$texto";
  echo "<br>";
  echo "$objeto";
  
