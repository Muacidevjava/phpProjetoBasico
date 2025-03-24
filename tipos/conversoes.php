<div class="titulo">conversoes</div>

<?php

  echo is_int(PHP_INT_MAX);

  echo " <br> De Int para Float <br>";
  var_dump(PHP_INT_MAX + 1);
  echo "<br>";
  var_dump(1 + 1.0);
  echo "<br>";
  var_dump((float)3);
  echo "<br>";

  echo " <br> De Float para Int <br>";
  var_dump((int)3.14);
  echo "<br>";
  var_dump((int)3.9);
  echo "<br>";
  var_dump((int)3.99999999999999999999);
  echo "<br>";
  var_dump(intval(2.8,10));
  echo "<br>";
 var_dump((int)round(2.8,10));

 echo"<p> String <p>";
 var_dump(3 + '5');
 echo "<br>";
 var_dump(3 + '5 teste');
 echo "<br>";
 var_dump(1 + " 5 cinco");
 echo "<br>";
 var_dump(1 + "-3.2e45");