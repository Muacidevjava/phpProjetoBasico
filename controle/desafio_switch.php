<div class="titulo">Desafio Switch Conversões</div>
  <form action="#" method="post">
    <input type="text" name="param" id="conversao">
    <select name="conversao" id="conversao">
     <option value="km-milha">Km para Milhas</option>
     <option value="milha-km">Milhas para Km</option>
     <option value="metro-km">Metros para Km</option>
     <option value="km-metro">Km para Metros</option>
     <option value="metro-centimetros">Metros para Centimetros</option>
     <option value="farenheit-celsius">farenhit para Celsius</option>
     <option value="celsius-farenheit">Celsius para Farenheit</option>
     </select>
    <button>Executar</button>
  </form>

  <style>
    form > *{
      font-size: 1.8rem;
    }
  </style>

<?php 

  $param = $_POST['param'];
  $conversao = $_POST['conversao'];

  switch ($conversao) {
    case 'km-milha':
      echo "$param Km equivale a  " . $param * 0.6214 . ' Milhas';
      break;
    case 'milha-km':
      echo "$param Milhas equivale a  " . $param / 0.6214 . ' Km';
      break;
    case 'metro-km':
      echo $param . ' Metros equivale a  ' . $param / 1000 . ' Km';
      break;
    case 'km-metro':
      echo $param . ' Km equivale a  ' . $param * 1000 . ' Metros';
      break;
    case 'metro-centimetros':
      echo $param . ' Metros equivale a  ' . $param * 100 . ' Centimetros';
      break;
    case 'farenheit-celsius':
      echo $param . ' Farenheit equivale a  ' . ($param - 32) / 1.8 . 'º Celsius';
      break;
    case 'celsius-farenheit':
      echo $param . ' Celsius equivale a  ' . ($param * 1.8) + 32 . 'º Farenheit';
      break;
    default:
      echo 'Nenhuma opcao selecionada';
      break;
  }
  