<div class="titulo">Constantes</div>

<?php
  define('NOME', 'João');
  echo NOME;
  echo "<br>";

  define('TAXA_DE_JUROS', 0.05);
  echo TAXA_DE_JUROS;
  echo "<br>";

  const NOME_DA_EMPRESA = 'Cursos PHP';
  echo NOME_DA_EMPRESA;

  const NOVISSIMA_TAXA = 2.8 + 1.5;
  echo "<br>";
  echo NOVISSIMA_TAXA;

  echo '<br>'. PHP_VERSION ;
  echo '<br>'. PHP_OS;
  echo '<br>'. PHP_EOL;

  echo '<br>'. __LINE__;
  echo '<br>'. __FILE__;
  echo '<br>'. __DIR__;