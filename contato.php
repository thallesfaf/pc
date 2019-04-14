<?php
include "estrutura/topo.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
    <link rel="stylesheet" href="css/form.css"/>
    <script language="javascript" src="_javascript/funcoes.js"></script>
</head>
<body>
<br><br>
<div id="interface">
<form method="post" id="fContato" action="mailto:thallesfaf@hotmail.com" oninput="calc_total();">
    <fieldset id="usuario"><legend>Identificação do Usuário</legend>
    <p><label for="cNome">Nome:</label> <input type="text" name="tNome" id="cNome" size="20" maxlength="30" placeholder="Nome completo"</p>
    <p>Senha: <input type="password" name="tSenha" id="cSenha" size="8" maxlength="8" placeholder="Senha"></p>
    <p>E-mail: <input type="email" name="tmail" id="cMail" size="20" maxlength="40" placeholder="Email"></p>
    <fieldset id="sexo"><legend>Sexo</legend>
        <input type="radio" name="tSexo" id="cMasc" checked/><label for="cMasc">Masculino</label><br/>
        <input type="radio" name="tSexo" id="cFem"/><label for="cFem">Feminino</label></fieldset>
    <p><label for="cNasc">Data de Nascimento: </label><input type="date" name="tNasc" id="cNasc"/></p>
</fieldset>
<fieldset id="endereço"><legend>Endereço do Usuário</legend>
    <p><label for="cRua">Logradouro: </label><input type="text" name="tRua" id="cRua" size="13" maxlength="80" placeholder="Rua, Avenida, etc"/></p>
    <p><label for="cNum">Número: </label><input type="number" name="tNum" id="cNum" min="0" max="10000"/></p>
    <p><label for="cEst">Estado: </label>
        <select name="tEst" id="cEst">
            <optgroup label="Região Sudeste">
                <option value="RJ">Rio de Janeiro</option>
                <option value="SP"selected>São Paulo</option>
                <option value="MG">Minas Gerais</option>
            </optgroup>
            <optgroup label="Região Sul">
                <option value="PR">Paraná</option>
                <option value="SC">Santa Catarina</option>
                <option value="RS">Rio Grande do Sul</option>
            </optgroup>
        </select></p>
    <p><label for="cCid">Cidade: </label>
        <input type="text" name="tCid" id="cCid" maxlength="40" size="20" placeholder="Sua Cidade" list="cidades"></p>
        <datalist id="cidades">
            <option value="Rio de Janeiro"></option>
            <option value="Nova Iguaçu"></option>
            <option value="Niterói"></option>
            <option value="Belford Roxo"></option>
        </datalist>
</fieldset>
<fieldset id="mensagem" ><legend>Mensagem do Usuário</legend>
    <p><label for="cUrg">Grau de Urgência: </label>
        Min <input type="range" name="tUrg" id="cUrg" min="0" max="10" step="1"> Max </p>
    <p><label for ="Msg">Mensagem: </label>
        <textarea name="tMsg" id="cMsg" cols="35" rows="5" placeholder="Deixe aqui sua mensagem"></textarea></p>
</fieldset>
<input type="image" name="tEnviar" src="img/botao-enviar.png">
</form>
<footer id="rodape">
        <p>Copyright 2018 - by Thalles França</p>
    </footer>
</div>
</body>
</html>