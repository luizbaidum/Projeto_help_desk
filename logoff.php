<?php 
	
	session_start();

	//remover índices do array de sessão. Remove o índice apenas se ele existir
	//unset($array['indice']);

	//destruir a variável de sessão (remover tudo ao mesmo tempo).
	session_destroy();

	header('Location: saiu.php');

?>