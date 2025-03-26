<div class="titulo">Desafio Foreach</div>

<!--
   Enunciado:
   -imprima apenas os valores do array que conte, indice par
   - desafio adicional: Resolver com for e foreach
   -- valores esperado ; AAA, CCC, EEE
-->

<?php
 $array = [
  'AAA', 'BBB', 'CCC', 'DDD', 'EEE', 'FFF'
];

echo "Com o Foreach";

foreach ($array as $key => $value) {
  if($key % 2 === 0) {
    echo "<p>$value</p>";
  }
}
echo '<hr>';
 echo"Com o For";
for ($i=0; $i < count($array); $i++) {
  if($i % 2 === 0) {
    echo "<p>$array[$i]</p>";
  }
}
