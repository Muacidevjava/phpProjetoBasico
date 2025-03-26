<div class="titulo">Arrays</div>

<?php

$cores = array('vermelho', 'azul', 'verde');
print_r($cores);
echo '<br>';
echo $cores[0];
echo '<br>';
echo $cores[1];
echo '<br>';
echo $cores[2];
echo '<br>';

echo"Array multedimensional <br>";
$equipe = [
  "desenvolvedor" => ["joão", "maria", "pedro"],
  "gerente" => "maria",
  "Designer" => ["mariana", "ana", "roberta"]
  ];
  print_r($equipe);
  echo '<br>';
  echo$equipe["desenvolvedor"][1];
  echo '<br>';
  echo $equipe["Designer"][2];
  echo '<br>';
  echo $equipe["gerente"];
  echo '<br>';

  echo "Adicionando elementos no array <br> <br>";
  $cores = ["vermelho", "verde"];
  $cores[] = "azul"; // Adiciona no final
  array_push($cores, "amarelo"); // Outra forma
  array_unshift($cores, "preto");
   print_r($cores);
  echo '<br>';

  echo "Removendo elementos do array <br> <br>";
  $cores = ["vermelho", "verde", "azul"];
  unset($cores[1]);
  print_r($cores);
  echo '<br>';