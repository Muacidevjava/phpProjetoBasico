<div class="titulo">Integração CSS</div>

<h1 center >
  <?php
  echo 'Olá ';
  echo '<small>';
  echo 'PHP Com CSS!';
  echo'</small>';
  ?>
</h1>

<?= "<div azul center>Outra forma de me  'expressar!'</div>" ?>
<br>
<div center><button dobro><?="Lets go"?></button></div>

<style>

  button{
    padding: 5px <?= 2 * 10?>px;
    background-color: #4286f4;
    color: #EEE;
    font-weight: bold;
    border-radius: 10px;
  }

  [center]
  {
    display: flex;
    justify-content: center;
  }
   [azul]{
    color: #4286f4;

   }
   [dobro]{
    font-size: 2rem;
   }
</style>