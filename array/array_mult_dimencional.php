<div class="titulo">Array Multidimensional</div>

<?php
 $lista = [
    [
      'nome' => 'João',
      'idade' => 20,
      'endereco' => [
        'rua' => 'Rua A',
        'numero' => 10,
        'bairro' => 'Bairro A'
      ]
    ],
    [
      'nome' => 'Maria',
      'idade' => 30,
      'endereco' => [
        'rua' => 'Rua B',
        'numero' => 20,
        'bairro' => 'Bairro B'
      ]
    ],
    [
      'nome' => 'Pedro',
      'idade' => 40,
      'endereco' => [
        'rua' => 'Rua C',
        'numero' => 30,
        'bairro' => 'Bairro C'
      ]
    ]
  ];

  print_r($lista);

  echo '<br>';
  echo $lista[0]['nome'];
  echo '<br>';
  echo $lista[0]['endereco']['rua'];
  echo '<br>';
  echo $lista[0]['endereco']['bairro'];
  echo '<br>';
  echo $lista[0]['endereco']['numero'];
  echo '<br> <hr>';
  echo"Segunda Pessoa <br>";
  echo $lista[1]['nome'];
  echo '<br>';
  echo $lista[1]['endereco']['rua'];
  echo '<br>';
  echo $lista[1]['endereco']['bairro'];
  echo '<br>';
  echo $lista[1]['endereco']['numero'];
  echo '<br> <hr>';

  unset($lista[0]['endereco']['numero']); //sai o numero 10
  print_r($lista);