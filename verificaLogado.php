<?php
$login_cookie = $_COOKIE['login'];
if($_COOKIE['login'] == false){
echo"<script language='javascript' type='text/javascript'>alert('O cliente selecionado não possui OS cadastrada.');window.location.href='visualizaClientes.php';</script>";
header('Location:loginClienteForm.php');
}
?>
<script language="JavaScript">
if(confirm("Você está logado como <?php echo"$login_cookie"?>, deseja se desconectar?"))
{
	window.location.href='logout.php';
}
else
{
	window.history.back();
}
</script>