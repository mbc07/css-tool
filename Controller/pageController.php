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

		echo "<!DOCTYPE html>\n\n";
		echo "<html>";

		require_once('config.php');
		require_once '../View/fragments/head.php';
		require_once '../Controller/controller.php';
		switch($url)
		{
			case 'index':
			require_once '../View/index.php';
			break;
			case 'cad':
			echo "MEUDEUS";
			
			$controller = new Controller();
			$controller->cadastra();
			break;

		}

		echo "</html>\n";
	}
	?>