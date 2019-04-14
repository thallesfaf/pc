<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
    <link rel="stylesheet" href="css/form.css"/>
    <script language="javascript" src="_javascript/funcoes.js"></script>
</head>
<body>
<?php 
                  $_GET['id'];
                  include "conecta.php";
                  include "estrutura/topo.php";

                if(isset($_GET['editar'])){
                    $id=$_GET['id'];
                    $email=$_GET['email'];
                    $cpf=$_GET['cpf'];
                    $nome=$_GET['nome'];
                    $sobrenome=$_GET['sobrenome'];
                    $fone=$_GET['fone'];
                    $celular=$_GET['celular'];
                    $cep=$_GET['cep'];
                    $rua=$_GET['rua'];
                    $bairro=$_GET['bairro'];
                    $cidade=$_GET['cidade'];
                    $uf=$_GET['uf'];  
                    $sql="update os set email='$email',cpf='$cpf',nome='$nome',sobrenome='$sobrenome',fone='$fone',celular='$celular',cep='$cep',rua='$rua',bairro='$bairro',cidade='$cidade',uf='$uf' where id_os=$id";
                    $resultado = mysqli_query($conecta,$sql);

                if($resultado>0) {
                echo ("<script LANGUAGE='JavaScript'>
                window.alert('OS ID $id_os foi alterada com sucesso!');
                window.location.href='visualizaOss.php';
                </script>");}
                else{
                echo ("<script LANGUAGE='JavaScript'>
                window.alert('Impossivel alterar OS $id_os !');
                window.location.href='visualizaOss.php';
                </script>");
                }
                }
            ?>

<?php
                        $id=$_GET['id'];
                        $sql="select usuarios.nome,os.id_os,DATE_FORMAT(os.dt_inclusao, '%d-%m-%y') as data_inclusao, DATE_FORMAT(os.dt_atualizacao, '%d-%m-%y') as ultima_atualizacao, os.status_os, os.status_faturamento, os.desc_equipamento, os.modelo_equipamento,os.desc_def_cliente, FORMAT(os.valor_os, 2,'pt_BR') as valor, os.laudo_tecnico, os.desc_servico, os.garantia, os.observacoes from usuarios join os on usuarios.id=os.id_usuario and id_os=$id";
                        $resultado = mysqli_query($conecta,$sql);
                        $linhas = mysqli_num_rows ($resultado);
                        for($i = 0 ; $i < $linhas; $i++){
                            $registro = mysqli_fetch_array($resultado);
?>
<br><br>
<div id="interface">
    <form action="editaOs.php" method="GET">
<br><br>
    <fieldset id="usuario"><legend>Dados da OS</legend>
        <legend><h3>Edição OS ID: <?php echo $registro['id_os']; ?><br>
        Nome: <?php echo $registro ['nome'];?> <br><br>
        Data de Inclusão: <?php echo $registro['data_inclusao']; ?> <br>
        Ultima atualização: <?php echo $registro['ultima_atualizacao']; ?></h3></legend>

    <p><label for="status_os">Status OS:</label> <input type="text" name="status_os" value="<?php echo $registro ['status_os'];?>" id="status_os" size="20" maxlength="30"> </p>

    <p><label for="status_faturamento">Status Faturamento:</label> <input type="text" name="status_faturamento" value="<?php echo $registro ['status_faturamento'];?>" id="status_faturamento" size="20" maxlength="30"> </p>

    <p><label for="valor_os">Valor da OS(R$):</label> <input type="text" name="valor_os" value="<?php echo $registro ['valor'];?>" id="valor_os" size="20" maxlength="30" ></p>

    <p><label for="desc_equipamento">Equipamento:</label> <input type="text" name="desc_equipamento" value="<?php echo $registro ['desc_equipamento'];?>" id="desc_equipamento" size="20" maxlength="30"> </p>

    <p><label for="modelo_equipamento">Modelo:</label> <input type="text" name="modelo_equipamento" value="<?php echo $registro ['modelo_equipamento'];?>" id="modelo_equipamento" size="20" maxlength="30" ></p>

    <p><label for="desc_def_cliente">Defeito Informado:</label> <input type="text" name="defeito_informado" value="<?php echo $registro ['desc_def_cliente'];?>" id="desc_def_cliente" size="20" maxlength="30" ></p>

    <p><label for="laudo_tecnico">Laudo tecnico:</label> <input type="text" name="laudo_tecnico" value="<?php 
    echo $registro ['laudo_tecnico'];?>" id="laudo_tecnico" size="20" maxlength="30" ></p>

    <p><label for="desc_servico">Serviço executado:</label> <input type="text" name="desc_servico" value="<?php 
    echo $registro ['desc_servico'];?>" id="desc_servico" size="20" maxlength="30" ></p>

    <p><label for="garantia">Garantia:</label> <input type="text" name="garantia" value="<?php 
    echo $registro ['garantia'];?>" id="garantia" size="20" maxlength="30" ></p>

    <fieldset id="observacoes" ><legend>Observações</legend>
    <p><textarea name="<?php echo $registro ['observacoes'];?>" value="<?php echo $registro ['observacoes'];?>" id="observacoes" cols="35" rows="5" ></textarea></p>
    </fieldset>
               <input type="button" value="Voltar" onClick="JavaScript: window.history.back();">
               <input type="hidden" name="id" value="<?php echo $registro ['id'];?>">
               <input type="button" value="Imprimir OS">
 <?php } ?>
</form>
</div>
</body>
</html>