<div class="titulo">Operadores Lógicos</div>

<?php
   echo"<p>Verdadeiro ou Falso</p><hr>";
   var_dump(true);
   echo "<br>";
   var_dump(!true);

   echo "<p>Tabela Verdade</p><hr>";
   var_dump(true && true);
   var_dump(true && false);
   var_dump(false && true);
   var_dump(false && false);
   var_dump(true && 3 > 2 && 1 > 0);
   echo "<hr>";
   var_dump(true || true);
   var_dump(true || false);
   var_dump(false || true);
   var_dump(false || false);
   echo "<hr>";
   var_dump(true xor true);
   var_dump(true xor false);
   var_dump(false xor true);
   var_dump(false xor false);
   echo "<hr>";
   var_dump(true or true);
   var_dump(true or false);
   var_dump(false or true);
   var_dump(false or false);
   echo "<hr>";

   echo "<p>Exemplo</p><hr>";
   $idade = 62;
   $sexo = 'F';
   $sexo1 = 'M';

   if($idade >= 60 && $sexo === 'F') {
    echo "Aposentadoria especial {$sexo}";
   }else if($idade >= 65 && $sexo === 'M') {
    echo "Aposentadoria especial {$sexo1}";
   }else{
    echo "Não tem direito a aposentadoria";
   }

   ?>

   <style>
    p{
       margin-bottom: 0px;
       background-color: bisque;
     }
     hr{
       margin-top: 0px;
     }
   </style>