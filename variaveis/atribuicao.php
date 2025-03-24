<div class="titulo">Atribuição</div>

<?php

  $title = 'Atribuição =';
 echo $title;
 echo '<br>';
 $numero = 10;
 echo $numero;
 echo '<br>';
 $numero = $numero + 1;
 echo $numero;
 echo '<br>';
 $numero = $numero - 12;
 echo $numero;
 echo '<br>';
 $numero = $numero * 2.63;
 echo $numero;
 echo '<br>'; 

 echo "Decremento:";
 echo '<br>';
 $numero = 10;
 echo $numero;
 echo '<br>';
 $numero--;
 echo $numero;
 echo '<br>';
 $numero--;
 echo $numero;
 echo '<br>';

 echo "Incremento:";
 echo '<br>';
 $numero++;
 echo $numero;
 echo '<br>';
 $numero++;
 echo $numero;
 echo '<br>';
 $numero++;
 echo $numero;
 echo '<br>';


 echo "pre-incremento:";
 echo '<br>';
 $numero = 10;
 echo ++$numero;  
 echo '<br>';

 echo "pos-incremento:"; 
 echo '<br>';
 $numero = 10;
 echo $numero++;  
 echo '<br>';

 echo "pre-decremento:";
 $numero -=5;
 echo $numero;
 echo '<br>';

 echo "pos-decremento:";
 $numero = 10;
 echo --$numero;
 echo '<br>';
 $numero **= 2;
 echo $numero;
 echo '<br>';

 $numero  .= 45;
 echo $numero;
 echo '<br>';

 //$varavelInexistente = 'valor inexistente';
 var_dump($varavelInexistente);
 echo '<br>';
 $valor = $varavelInexistente ?? 'valor default';
 echo $valor;
 echo '<br>';

 ?>