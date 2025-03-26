<div class="titulo">Desafio Meses</div>

<?php

$meses = array(
     1 =>'Janeiro',
    'Fevereiro',
    'Março',
    'Abril',
    'Maio',
    'Junho',
    'Julho',
    'Agosto',
    'Setembro',
    'Outubro',
    'Novembro',
    'Dezembro'
);

print_r($meses);
echo '<br> <hr>'; ;
foreach ($meses as $mes) {
    echo "$mes <br>";
}
echo '<br> <hr>'; 
$meses[5] = 'Maio';
print_r($meses[5]);
echo '<br>';

echo'<br>'.$meses[12];