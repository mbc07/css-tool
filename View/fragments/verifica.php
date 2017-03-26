<?php 
// Inicia sessões

// Verifica se existe os dados da sessão de login 
if(!isset($_SESSION["id_usuario"]) || !isset($_SESSION["nome_usuario"])) 
{ 
// Usuário não logado! Redireciona para a página de login 
echo "<h2> USO RESTRITO PARA USUÁRIOS CADASTRADOS!</h2>";
exit; 
}else {
	echo"<h1>AAAAAA</h1>";
}
?> 