<div class="titulo">Operações Aritimeticas</div>

<?php

echo 1 + 1 . "<br>";
var_dump(1 + 1.0);
echo "<br>";

echo 1 + 2.5 . "<br>";
var_dump(1 + 2.5);
echo "<br>";

echo 10 - 2 . "<br>";
var_dump(10 - 2);
echo "<br>";

echo 2 * 5 . "<br>";
var_dump(2 * 5);
echo "<br>";

echo 7 / 4 . "<br>";
var_dump(7 / 4);
echo "<br>";

echo intdiv(7, 4) . "<br>";
var_dump(intdiv(7, 4));
echo "<br>";

echo round(7 % 4) . "<br>";
var_dump(round(7 % 4));
echo "<br>";

/*echo 7 / 0 . "<br>";
var_dump(7 / 0);
echo "<br>";

/*echo intdiv(7, 0) . "<br>";
var_dump(intdiv(7, 0));
echo "<br>";*/

echo 4**2 . "<br>";
var_dump(4**2);
echo "<br>";

echo " precedência <br>";
echo "2 + 3 * 5 = ",2 + 3 * 5 . "<br>";
echo "(2 + 3) * 5 = ", (2 + 3) * 5 . "<br>";
echo "2 + 3 * 5 ** 2 = ",2 + 3 * 5 ** 2 . "<br>";
echo "(2 + 3) * 5 ** 2 = ",(2 + 3) * 5 ** 2 . "<br>";
echo "(2 + 3) * (5 ** 2) = ",(2 + 3) * (5 ** 2) . "<br>";
echo "2 + 3 * (5 ** 2) = ",2 + 3 * (5 ** 2) . "<br>";
echo "(2 + 3 * (5 ** 2)) = ",(2 + 3 * (5 ** 2)) . "<br>";
echo "(2 + 3 * 5) ** 2 = ",(2 + 3 * 5) ** 2 . "<br>";
echo "2 + 3 * 5 ** 2 = ",2 + 3 * 5 ** 2 . "<br>";