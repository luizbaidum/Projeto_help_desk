<?php

	//Iicia uma sessão (acessa região de memória do servidor e puxa pro navegador)
	session_start();

	//$_SESSION['x'] = 'teste';
	//array $_SESSION fica disponível para todos os scripts PHP da sessão

	//$_POST é uma superglobal
	$_POST['email']; 
	$_POST['senha'];

	//acesso aos usuários do sistema //geralmente busca do banco de dados
	$usuarios_app = array(
		array('email' => 'luiz@teste.com', 'senha' => 1234),
		array('email' => 'eliana@teste.com', 'senha' => 1234),
		array('email' => 'pascoal@teste.com', 'senha' => 1234),
		array('email' => 'menininha@teste.com', 'senha' => 1234),
	);

	//inicio: lógica para validação
	$usuarioAutenticado = false;

	//transforma a array de arrays em duas arrays separadas
	foreach ($usuarios_app as $user) {

		$user['email'];
		$user['senha'];
		
		if($_POST['email'] == $user['email'] && $_POST['senha'] == $user['senha'])
			$usuarioAutenticado = true;
		}

	if($usuarioAutenticado == true) {
		$_SESSION['autenticado'] = 'SIM';
		header('Location: home.php');
	} else {
		//dados para retorno após falha no login
		header('Location: index.php?login=erro');
		$_SESSION['autenticado'] = 'NAO';
	}
	//fim: lógica para validação
?>	