<div class="titulo">Switch</div>

<?php

  $categoria = 'luxo';

 

  switch ($categoria) {
    case 'luxo':
      echo 'Sua categoria eh Vip <br>';
      break;
    case 'normal':
      echo 'Sua categoria eh Normal <br>';
      break;
    default:
      echo 'Sua categoria eh Padrao <br>';
      break;
  }

  $carro = 'suv';

  switch ($carro) {
    case 'hatch':
      echo 'Sua categoria eh Vip';
      break;
    case 'sedan':
      echo 'Sua categoria eh Normal';
      break;
    case 'suv':
      echo 'Sua categoria eh Surpervip'; 
      break; 
    default:
      echo 'Sua categoria eh Padrao';
      break;
  }