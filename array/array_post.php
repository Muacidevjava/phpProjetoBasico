<div class="titulo">$_POST</div>

<form action="#" method="post">
   <input type="text" name="nome">
   <input type="text" name="sobrenome">
   <select name="estado" id="">
     <option value="SP">São Paulo</option>
     <option value="RJ">Rio de Janeiro</option>
     <option value="MG">Minas Gerais</option>
     <option value="ES">Espirito Santo</option>
      <option value="RS">Rio Grande do Sul</option>
      <option value="SC">Santa Catarina</option>
      <option value="PR">Paraná</option>
      <option value="GO">Goiás</option>
      <option value="MT">Mato Grosso</option>
      <option value="MS">Mato Grosso do Sul</option>
      <option value="DF">Distrito Federal</option>
      <option value="BA">Bahia</option>
      <option value="SE">Sergipe</option>
      <option value="PE">Pernambuco</option>
      <option value="AL">Alagoas</option>
      <option value="PB">Paraíba</option>
      
   </select>
   <button>Enviar</button>
</form>

<style>
  form > *{
    font-size: 1.8rem;
  }
</style>
<?php
echo "O Seu nome é " . $_POST['nome'] . ' ' . $_POST['sobrenome'] . ' e você mora em ' . $_POST['estado'];
