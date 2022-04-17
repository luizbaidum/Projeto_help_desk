<?php require_once("validador_acesso.php"); ?>
<!-- precisa ser require_once() para que ele MATE a aplicação em caso de erro e não permita segunda requisição do validador -->

<?php
  
  $chamados = array();

  //abre o arquivo.txt 
  $arquivo = fopen('../../../APP_PROJETO_HELP_DESK/arquivo.txt', 'r');

  //percorre cada linha escrita no arquivo.txt
  //feof() testa linha por linha até o fim de um arquivo
  while(!feof($arquivo)) {

    //fgets() recupera o que está na linha em teste pelo feof()
    $registro = fgets($arquivo);

    if($_SESSION['perfilId'] == 1) {

      array_push($chamados, $registro);

    } else {

      $chamadoDoUsuario = explode('#', $registro);

      if($_SESSION['id'] == $chamadoDoUsuario[0]) {

        array_push($chamados, $registro);

      };
    };
  };

  fclose($arquivo);

?>
<html>
  <head>
    <meta charset="utf-8" />
    <title>LB: Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-consultar-chamado {
        padding: 30px 0 0 0;
        width: 100%;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <?php include_once("menu.php"); ?>

    <div class="container">  

      <div class="row">

        <div class="card-consultar-chamado">

          <div class="card">

            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">

              <?php foreach($chamados as $chamado) {

                 $chamadoDados = explode('#', $chamado);

                 if(count($chamadoDados) < 3) {
                  continue;
                 };
              ?>
              <div class="card mb-3 bg-light">

                <div class="card-body">

                  <h5 class="card-title"><?= $chamadoDados[1] ?></h5>

                  <h6 class="card-subtitle mb-2 text-muted"><?= $chamadoDados[2] ?></h6>

                  <p class="card-text"><?= $chamadoDados[3] ?></p>
                </div>
              </div>

              <?php } ?>

              <div class="row mt-5">

                <div class="col-6">
                  
                  <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>