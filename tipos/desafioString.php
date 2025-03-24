<div class="titulo">Desafio String</div>

<?php

echo strpos('!AbcaBcabc', 'abc');
echo '<br>';
echo strpos('!AbcaBcaBcabc', 'abc', 3);
echo '<br>';

echo stripos('!AbcaBcaBcabc', 'abc');
echo '<br>';

echo strpos(strtolower('!AbcaBcaBcabc'), strtolower('abc'));

?>

