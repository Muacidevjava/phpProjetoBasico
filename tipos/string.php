<div class="titulo">Tipo Strings</div>

<?php

 echo "Olá Eu sou uma String" . "<br>";
var_dump("Olá Eu sou uma String");
echo "<br>";

 // concatenação
 echo "Você " . "pode " . "concatenar " . "strings" . " com ' 
 ponto .'"."<br>";

 echo "Tambem aceito virgula, mas não é recomendado <br>";

 echo "'Teste com aspa simples' "."<br>". ' "teste com aspas duplas"'." <br>";
 print("Imprimindo com print <br>");
 print"<br> imprimindo sem parenteses com a funcao print <br>";

 //algumas funçoes

 echo  strtoupper('maximizado') . "<br>";
 echo  strtolower('minimizado') . "<br>";
 echo  ucfirst('primeira maiuscula') . "<br>";
 echo strlen('contando caracterés'.'utf-8') . " Contando caracteres" . "<br>";
 echo substr('só uma parte memso', 0, 5) . "<br>";
 echo str_replace('memso', 'mesmo', 'só uma parte memso') . "<br>";