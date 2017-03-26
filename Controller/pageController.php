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
	require_once('config.php');
	require_once '../View/fragments/head.php';
	switch($url)
	{
		case 'index':
			require_once '../View/index.php';
		break;

	}
}
?>