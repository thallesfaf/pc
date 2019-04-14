<html lang="pt-BR">
    <head>
        <meta charset="UTF-8" />
							<?php 
								 $cpf = $_POST['cpf'];
								 $login = $_POST['login'];
								 $senha = MD5($_POST['senha']);
								 $connect = mysqli_connect('localhost','root','senha5','projeto');
								 $query_select = "SELECT login FROM usuarios WHERE login = '$login'";
								 $select = mysqli_query($connect,$query_select);
								 $linhas = mysqli_num_rows($select);
								 $query_select_cpf = "SELECT cpf FROM usuarios WHERE cpf = $cpf";
								 $select2 = mysqli_query($connect,$query_select_cpf);
								 $array_cpf = mysqli_fetch_array($select2);
								 $logarray_verifica_cpf = $array_cpf['cpf']; //verifica cpf - funcionando
								 $query_select_cadastrado = "SELECT login FROM usuarios WHERE cpf = $cpf AND login is not null";
								 $select_cadastrado = mysqli_query($connect,$query_select_cadastrado);
								 $linhas_cadastrado = mysqli_num_rows($select_cadastrado);

								 if($cpf == "" || $cpf == null) {
									echo"<script language='javascript' type='text/javascript'>alert('O campo CPF deve ser preenchido');window.location.href='cadastroForm.php';</script>";
								 }
								 else {
									
									if($linhas_cadastrado > 0) {							
										echo"<script language='javascript' type='text/javascript'>alert('Cliente ja cadastrado! Insira seu usuario e senha para continuar.');window.location.href='loginClienteForm.php';</script>";
									}
									else {

								 	if($linhas > 0)	{
										echo"<script language='javascript' type='text/javascript'>alert('Nome de usuario ja existente, favor escolher outro.');window.location.href='cadastroForm.php';</script>";
									}
									else if($logarray_verifica_cpf == null) {									
										echo"<script language='javascript' type='text/javascript'>alert('CPF nao cadastrado');window.location.href='cadastroForm.php';</script>";
									}
								  	else {
									    $query = "UPDATE usuarios SET login='$login',senha='$senha' where cpf = $cpf";
									    $insert = mysqli_query($connect,$query);

										if($insert)	{
											echo"<script language='javascript' type='text/javascript'>alert('Usuario cadastrado com sucesso!');window.location.href='loginClienteForm.php'</script>";
										}
										else {
											echo"<script language='javascript' type='text/javascript'>alert('ERRO! Impossivel cadastrar o usuario!');window.location.href='cadastroForm.php'</script>";
										}
							   		 }
								  }
							   }
							?>
</head>
</html>