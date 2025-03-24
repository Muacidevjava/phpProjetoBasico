<div class="titulo">Valor vs referência</div>

<?php
   $variavel = 'valor inicial';
   echo $variavel;

   $variavelValor = $variavel;
   echo "<br>$variavelValor";
   $variavel = 'valor alterado';
   echo "<br>$variavel";
   
   //atribuição por referência
   $variavelReferencia = &$variavel;
   $variavelReferencia = 'mesma referência';
   echo "<br>$variavelReferencia";
   echo "<br>$variavel";  

   echo "<hr>";

   echo "<br>\$variavel = '$variavel'";
   echo "<br>\$variavelValor = '$variavelValor'";
