<?php
/**
	* Faz a verificacao se exite a variavel get url.
*/
	if(isset($_GET['url']))
		constructPage($_GET['url']);

	else 
		constructPage('index');


/**
	* Funcao que trata a solicitacao da pagina que chama.
*/
	function constructPage($url)
	{
		session_start(); 
		echo "<!DOCTYPE html>\n\n";
		echo "<html>";

		require_once 'config.php';
		require_once '../View/fragments/head.php';
		require_once '../Controller/controller.php';

		$controller = new Controller();
		
		switch($url)
		{
			case 'index':
			require_once '../View/index.php';
			break;
			case 'cad':
			$controller->cadastra();
			break;
			case 'login':
			$controller->login();
			break;
			case 'out':
			$controller->out();
			break;
			case 'reset':
			$controller->reset();
			break;
			case 'upFile':
			$controller->up();
			break;
			case 'editFile':
			$controller->editF();
			break;
			case '':
			$controller->editF();
			break;
			default:
			require_once '../View/index.php';
			break;

		}
		
		echo "</html>\n";
	}
	?>