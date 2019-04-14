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
    <form method="POST" action="login.php">
<br><br>
    <fieldset id="usuario"><legend><h3>Identificação do Cliente</h3></legend>
<br><br>
    <p><label for="login">Login:</label> <input type="text" name="login" id="login" size="20" maxlength="30" placeholder="Login"</p>
    <p><label for="senha">Senha:</label> <input type="password" name="senha" id="senha" size="20" maxlength="30" placeholder="Senha"</p>
    <br><br><input type="submit" value="entrar" id="entrar" name="entrar">
    <a href="cadastroForm.php"><b>Cadastre-se</b></a>
</fieldset> 
</form><br><br><br>
</div>
</body>
</html>
