<?php
	//Iicia uma sessão (acessa região de memória do servidor e puxa pro navegador)
	session_start();

	//$_SESSION['x'] = 'teste';
	//array $_SESSION fica disponível para todos os scripts PHP da sessão

	//$_POST é uma superglobal
	$_POST['email']; 
	$_POST['senha'];

	$usuarioId = null;

	$usuarioAutenticado = false;

	$usuarioPerfilId = null;

	//define nível de acesso dos usuários
	$perfis = [
		1 => 'Adm',
		2 => 'User',	
	];

	//acesso aos usuários do sistema //geralmente busca do banco de dados
	$usuarios_app = array(
		array('id' => 1, 'email' => 'luiz@teste.com', 'senha' => 1234, 'perfilId' => 1),
		array('id' => 2,'email' => 'eliana@teste.com', 'senha' => 1234, 'perfilId' => 1),
		array('id' => 3,'email' => 'pascoal@teste.com', 'senha' => 1234, 'perfilId' => 2),
		array('id' => 4,'email' => 'menininha@teste.com', 'senha' => 1234, 'perfilId' => 2),
	);

	//inicio: lógica para validação
	//transforma a array de arrays em 3 arrays separadas ($user['email'], $user['senha'], $user['id'])
	foreach ($usuarios_app as $user) {

		if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {

			$usuarioAutenticado = true;

			$usuarioId = $user['id'];

			$usuarioPerfilId = $user['perfilId'];

			$emailLogado = $user['email'];
		}; };

	if($usuarioAutenticado == true) {
		$_SESSION['autenticado'] = 'SIM';

		$_SESSION['id'] = $usuarioId;

		$_SESSION['perfilId'] = $usuarioPerfilId;

		$_SESSION['email'] = $emailLogado;

		header('Location: home.php');
	} else {
		//dados para retorno após falha no login
		$_SESSION['autenticado'] = 'NAO';

		header('Location: index.php?login=erro');
	}
	//fim: lógica para validação
?>	