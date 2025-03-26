<div class="titulo">Repetições For</div>

<?php
  for ($contador = 1; $contador <=10; $contador++) {
    
    echo "$contador" ." * " . "2"  ." = ". $contador * 2 ."<br>" ;
  }

  $arrray = [1,2,3,4,5,6,7,8,9,10];
  for ($contador = 0; $contador < count($arrray); $contador++) {
    echo "$arrray[$contador] <br>";
  }

  $matrix =[['a','e','i','o','u'],
  ['b','c','d']];
  for ($contador = 0; $contador < count($matrix); $contador++) {
    echo "$matrix[$contador] <br>";
  }

  $diasSemana = ['segunda', 'terca', 'quarta', 'quinta', 'sexta', 'sabado', 'domingo'];
  for ($contador = 0; $contador < count($diasSemana); $contador++) {
    echo "$diasSemana[$contador] <br>";
  }