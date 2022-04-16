<?php 
  //ENSINADO PELO PROFESSOR:
  //formatando array $_POST para melhor exibição
  //$titulo = str_replace('#', '-', $_POST['titulo']);
  //$categoria = str_replace('#', '-', $_POST['categoria']);
  //$descricao = str_replace('#', '-', $_POST['descricao']);
  //e cria-se uma variavel concatenando todas essas variaveis + PHP_EOL no final
  
  $_POST;

  $mensagemOriginal = [
    'Título:' => $_POST['titulo'],
    'Categoria:' => $_POST['categoria'],
    'Descrição:' => $_POST['descricao'],
  ];

  if($_POST['titulo'] == '' || $_POST['descricao'] == '') {

    $_GET['chamado'] = 'erro';
    header('Location: abrir_chamado.php?chamado=erro');

  } else {

    $textoFormatado = [];

  foreach ($mensagemOriginal as $campo => $formatando) {

    $mensagemOriginal[$campo] = str_replace('#', '-', $formatando);

    $textoFormatado[$campo] = $mensagemOriginal[$campo];
  };

  $solicitacaoUsuario = implode(' #', $textoFormatado);

  $solicitacaoUsuario = $solicitacaoUsuario . PHP_EOL;

  //funções nativas para gerar arquivo
  $arquivo = fopen('arquivo.txt', 'a');

  fwrite($arquivo, $solicitacaoUsuario);

  fclose($arquivo);

  $_GET['chamado'] = 'sucesso';
  header('Location: abrir_chamado.php?chamado=sucesso');

  };
  
?>