<div class="titulo">Tipo Boleano</div>

<?php

 echo TRUE , "<br>";
 echo FALSE , "<br>";

 var_dump(TRUE);
 var_dump(FALSE);
 echo "<br>";
 var_dump('false');
 echo "<br>";
 var_dump('true');
 echo "<br>";
 var_dump(10 > 2);

 echo "<br> Conversões e Regras de conversão";
 echo "<br>";
 echo '<p>Regras: </p>';
 echo '<br>'. var_dump((bool) 0);
 echo '<br>'. var_dump((bool) 1);
 echo '<br>'. var_dump((bool) -1);
 echo '<br>'. var_dump((bool) 1.2);
 echo '<br>'. var_dump((bool) '');
 echo '<br>'. var_dump((bool) '00');
 echo '<br>'. var_dump((bool) '01');
