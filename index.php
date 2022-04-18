<html>
  <head>
    <meta charset="utf-8" />
    <title>LB: Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- HTML5Shiv -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <![endif]-->

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">

      <a class="navbar-brand" href="home.php">

        <img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>

    <div class="container">  

      <div class="row">

        <div class="card-login">

          <div class="card">

            <div class="card-header">
              Login
            </div>

            <div class="card-body">

              <form action="valida_login.php" method="post">
                <div class="form-group">

                  <input name="email" type="email" class="form-control" placeholder="E-mail">
                </div>

                <div class="form-group">

                  <input name="senha" type="password" class="form-control" placeholder="Senha">
                </div>

                <!--ATENÇÃO na construção deste PHP-->
                <?php

                  //execução do retorno após falha no login
                  //isset verifica se a variável está declarada
                  if(isset($_GET['login']) && $_GET['login'] == 'erro') {  
                  
                ?>
                  <div class="text-danger" style="text-align: center;">Verificar e-mail e/ou senha</div>

                <?php 

                  } else if(isset($_GET['login']) && $_GET['login'] == 'erro2'){ ?>

                  <div class="text-danger" style="text-align: center;">Faça login antes de acessar páginas protegidas</div> 

                <?php

                  };

                ?>
                
                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
    </div>
  </body>
</html>