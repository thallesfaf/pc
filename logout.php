<?php
ob_start();
	$login = $_COOKIE["login"];
	$senha = $_COOKIE["senha"];
setcookie("login", "$login", time()-3600);
setcookie("senha", "$senha", time()-3600);
		echo "<script type=\"text/javascript\">";
		echo "alert('Você se deslogou com sucesso!');";
		echo "location.href='index.php';";
		echo "</script>";
?>