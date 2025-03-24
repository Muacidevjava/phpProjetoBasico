<div class="titulo">Variaveis Variáveis</div>

<?php

   $a = "valor a";
   $$a = "valor AA";

   echo "$a R$$a";
   echo "<br>";
   echo "$a ${$a}";
   echo "<br>";

   echo "$a ${$$a} ${$a}";
   echo "<br>";

   $epa = 'opa';
   $opa = 'vish';
   echo "$epa $opa";
   echo "<br>";
   echo "$epa ${$epa}";
   echo "<br>";
   echo "$epa";
   echo "<br>";
   echo "$epa ${$$epa} ${$$$epa}";