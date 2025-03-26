<div class="titulo">Desafio Sorteio</div>

<form action="#" method="post">
  <button>Sortear</button>
</form>

<?php
 $nome = ["Elza ", "Rapunzel", "Branca de Neve", "Cinderela"];
 $sorteio = array_rand($nome);
 echo "<div center><h1>O nome sorteado foi: $nome[$sorteio]<h1></div>";



 ?>

 <style>
  [center]{
    display: flex;
    justify-content: center;
  }

  button{
    padding: 10px;
    background-color:rgb(192, 18, 18);
    border: 1px solid #333;
    border-radius: 5px;
  }
 </style>


