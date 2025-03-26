<div class="titulo">Break E continue</div>

<?php

  $cont = 10;
  for(;;) { //laço infinito
    echo "$cont <br>";
    $cont++;
    if($cont > 15) {
      break;
    }
   
  }
  
  echo"Fim!";
  echo '<hr>';

  for(;;) {
    $cont++;
    if($cont % 2 === 1) {
      continue;
    }
    echo "$cont <br>";
    if($cont > 30) {
      break;
    }
  }
  echo "Fim! <br>";
  echo '<hr>';

  foreach(array(1,2,3,4,5,6) as $item) {
    if($item === 3) {
      continue;
    }
    echo "$item <br>";
  }