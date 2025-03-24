<div class="titulo">Desafio Equação</div>

<?php

// Numerador da primeira fração
$numerador1 = (6 * (3 + 2)**2);

// Denominador da primeira fração
$denominador1 = 3 * 2;

// Numerador da segunda fração
$numerador2 = ((1 - 5) * (2 - 7)** 2);

// Denominador da segunda fração
$denominador2 = 2;

// Calcula a diferença das frações
$diferenca_fracoes = ($numerador1 / $denominador1) - ($numerador2 / $denominador2);

// Denominador principal
$denominador_principal = pow(10, 3);


// Calcula o resultado final
$resultado = $diferenca_fracoes / $denominador_principal;

echo $resultado; // Exibe o resultado

?>