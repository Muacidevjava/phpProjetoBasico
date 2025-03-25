<div class="titulo">Operador Relacionais</div>

<?php

  var_dump(10 > 9 ,"<br>");
  var_dump(10 >= 9 , "<br>");
  var_dump(10 < 9 , "<br>");
  var_dump(10 <= 9 , "<br>");
  var_dump(10 == 9 , "<br>");
  var_dump(10 != 9 , "<br>");
  var_dump(10 === 9 , "<br>");
  var_dump(10 !== 9 , "<br>");
  
  var_dump(10 === "10" , "<br>");
  var_dump(10 == "10" , "<br>");

  echo"<p> Usando os relacionais<br></p><hr>";

  $idade = 55;

  if($idade >18) {
    echo "Maior de idade " ,$idade;
  } else if($idade < 18) {
    echo "Menor de idade,",$idade;
  }else if($idade >= 65) {
    echo "Terceira idade ",$idade;
  }
  echo "<p>Spaceship</p><hr>";
  var_dump(10 <=> 10);
  var_dump(10 <=> 9);

  ?>

  <style>
    p{
      margin-bottom: 0px;
    }
    hr{
      margin-top: 0px;
    }
  </style>