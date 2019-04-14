<?php include "estrutura/topo.php"; ?>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
    <link rel="stylesheet" href="css/form.css"/>
    <script language="javascript" src="_javascript/funcoes.js"></script>
</head>
<body>
	<br><br><br>
<div id="interface">
    <form method="POST" action="cadastro.php">
    <fieldset id="usuario"><legend><h3>Cadastro de Usuario</h3></legend>
<br><br>
	<p><label for="cpf">* CPF:</label> <input type="number" name="cpf" id="cpf" size="20" maxlength="11" placeholder="CPF"</p>
    <p><label for="login">* Login:</red></label> <input type="text" name="login" id="login" size="20" maxlength="30" placeholder="Login"</p>
    <p><label for="senha">* Senha:</red></label> <input type="password" name="senha" id="senha" size="20" maxlength="30" placeholder="Senha"</p>
    <br><br><input type="submit" value="cadastrar" id="cadastrar" name="Cadastrar">
</fieldset>
</form><br><br>
</div>
</body>
</html>
