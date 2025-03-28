<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/css/estilo.css" />
    <title>Curso PHP</title>
  </head>
  <body>
      <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice das Aulas</h2>
      </header>
      <main class=" principal">
        <div class="conteudo">
          <nav class="modulos">
            <div class="modulo verde">
              <h3>Básico </h3>
              <ul>
                <li><a href="exercicio.php?dir=teste&file=teste">Exercício teste</a></li>
                <li><a href="exercicio.php?dir=basico&file=ola">Exercício Olá PHP</a></li>
                <li><a href="exercicio.php?dir=basico&file=html">Integração HTML</a></li>
                <li><a href="exercicio.php?dir=basico&file=css">Integração CSS</a></li>
                <li><a href="exercicio.php?dir=basico&file=comentarios">Comentarios PHP</a></li>
                <li><a href="exercicio.php?dir=basico&file=desafio">Desafio PHP 1 </a></li>
              </ul>
            </div>
              <div class="modulo vermelho">
                <h3>Tipos de Dados</h3>
                <ul>
                  <li><a href="exercicio.php?dir=tipos&file=int">Int</a></li>
                  <li><a href="exercicio.php?dir=tipos&file=float">Float</a></li>
                  <li><a href="exercicio.php?dir=tipos&file=aritimeticas">Op Aritimeticas</a></li>
                  <li><a href="exercicio.php?dir=tipos&file=desafio">Desafio Precedencia</a></li>
                  <li><a href="exercicio.php?dir=tipos&file=string">String</a></li>
                  <li><a href="exercicio.php?dir=tipos&file=desafioString">Desafio String</a></li>
                  <li><a href="exercicio.php?dir=tipos&file=boolean">tipo Boleano</a></li>
                  <li><a href="exercicio.php?dir=tipos&file=conversoes">Conversões</a></li>
                </ul>
              </div>
              <div class="modulo azul ">
                <h3>Variaveis</h3>
                <ul>
                  <li><a href="exercicio.php?dir=variaveis&file=basico">Variáveis</a></li>
                  <li><a href="exercicio.php?dir=variaveis&file=desafio">Desafio</a></li>
                  <li><a href="exercicio.php?dir=variaveis&file=atribuicao">Atribuição</a></li> 
                  <li><a href="exercicio.php?dir=variaveis&file=interpolacao">Interpolação</a></li>
                  <li><a href="exercicio.php?dir=variaveis&file=var_variaveis">Variaveis Variáveis</a></li>
                  <li><a href="exercicio.php?dir=variaveis&file=desafio_variavel">Desafio</a></li>
                  <li><a href="exercicio.php?dir=variaveis&file=valor_referencia">Valor vs Referência</a></li>
                  <li><a href="exercicio.php?dir=variaveis&file=constante">Constantes</a></li> 
                </ul>
                </div>  
                <div class="modulo roxo">
                  <h3>Controle</h3>
                  <ul>
                    <li><a href="exercicio.php?dir=controle&file=if_else">if/else</a></li>
                    <li><a href="exercicio.php?dir=controle&file=operador-relacionais">Operadores Relacionais</a></li>
                    <li><a href="exercicio.php?dir=controle&file=desafio_pi">Desafio PI</a></li>
                    <li><a href="exercicio.php?dir=controle&file=operadores_logicos">Operadores Logicos</a></li>
                    <li><a href="exercicio.php?dir=controle&file=desafio_operadores">Desafio Operadores</a></li>
                    <li><a href="exercicio.php?dir=controle&file=switch">Switch</a></li> <li><a href="exercicio.php?dir=controle&file=operador_ternario">Operador Ternário</a></a></li>
                    <li><a href="exercicio.php?dir=controle&file=desafio_switch">Desafio Switch</a></li>
                  </ul >
                </div>
                <div class="modulo laranja">
                  <h3>Array</h3>
                  <ul>
                    <li><a href="exercicio.php?dir=array&file=basico">Array</a></li>
                    <li><a href="exercicio.php?dir=array&file=array_mapa">Array Mapa</a></li>
                    <li><a href="exercicio.php?dir=array&file=desafio_index">Desafio Index</a></li>
                    <li><a href="exercicio.php?dir=array&file=desafio_meses">Desafio Meses</a></li>
                    <li><a href="exercicio.php?dir=array&file=operacoes">Operaçoes</a></li>
                    <li><a href="exercicio.php?dir=array&file=desafio_sorteio">Desafio Sorteio</a></li>
                    <li><a href="exercicio.php?dir=array&file=array_mult_dimencional">Array Multidimensional</a></li>
                    <li><a href="exercicio.php?dir=array&file=array_const">Array Constante</a></li>
                    <li><a href="exercicio.php?dir=array&file=array-Get">$_GET</a></li>
                     <li><a href="exercicio.php?dir=array&file=array_post">$_POST</a></a></li>
                     <li><a href="exercicio.php?dir=array&file=comparacao">Comparação</a></li>
                  </ul>
                </div>  
                <div class="modulo verde-escuro">
                  <h3>Repetições</h3>
                  <ul>
                     <li><a href="exercicio.php?dir=repetiçoes&file=for">For</a></li>
                     <li><a href="exercicio.php?dir=repetiçoes&file=desafio_for">Desafio For</a></li>
                     <li><a href="exercicio.php?dir=repetiçoes&file=foreach">Foreach</a></li>                    
                     <li><a href="exercicio.php?dir=repetiçoes&file=break_continue">Break e Continue</a></li>
                     <li><a href="exercicio.php?dir=repetiçoes&file=desafio_for">Desafio For</a></li>
                     <li><a href="exercicio.php?dir=repetiçoes&file=desafio_foreach">Desafio Foreach</a></li>
                     <li><a href="exercicio.php?dir=repetiçoes&file=while_dowile">While</a></li>
                  </ul>
                </div>
          </nav>
        </div>
      </main>
      <footer class="rodape">
        MUACI &copy; <?= date('Y'); ?>
      </footer>



  </body>
</html>
