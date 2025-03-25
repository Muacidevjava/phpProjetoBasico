<div class="titulo">Desafio Operadores</div>

<form action="#" method="post">
  <div>
  <label for="t1">Trabalho 1 (terça Feira):</label>
  <select name="t1" id="t1">
    <option value="1">Execultado</option>
    <option value="0"> Não Execultado</option>
  </select>
  </div>
  <div>
  <label for="t2">Trabalho 2 (quinta Feira):</label>
  <select name="t2" id="t2">
    <option value="1">Execultado</option>
    <option value="0">Não Execultado</option>
  </select>
  </div>
  <button>Executar</button>
</form>

<style>
  button, select {
    font-size: 1.8rem;
  }

</style>
<?php
 $_POST['t1'] . '<br>';
 $_POST['t2'] . '<br>';

if ($_POST['t1'] == 1 && $_POST['t2'] == 1) {
  echo 'Vamos comprar uma TV de 50" no Shopping e tomar sorvete!';
}else if ($_POST['t1'] == 1 || $_POST['t2'] == 1) {
  echo 'Vamos comprar uma TV de 32"  no Shopping e tomar sorvete!';
}else {
  echo 'Vamos ficar em casa! e tomar sorvete em casa!';
}