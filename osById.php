                  
<html>
<head>
<meta charset="utf-8">
<?php
$login_cookie = $_COOKIE['login'];
include "estrutura/topo.php";
include "conecta.php";      
                            $sql="select usuarios.nome,os.id_os, os.dt_atualizacao, os.dt_inclusao, os.status_os, os.status_faturamento, os.desc_equipamento, os.modelo_equipamento,os.desc_def_cliente, FORMAT(os.valor_os, 2,'pt_BR') as valor, os.laudo_tecnico, os.desc_servico, os.garantia from usuarios join os on usuarios.id=os.id_usuario and usuarios.login='$login_cookie'";
                            $resultado = mysqli_query($conecta,$sql);
                            $linhas = mysqli_num_rows ($resultado);
                            for($i = 0 ; $i < $linhas; $i++){
                                $registro = mysqli_fetch_array($resultado);
                                ?> 
</head>
<body>
    <br>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <div id="espaco"></div>
    <div id="divCentral">

             <div id="espaco"></div>
             <form action="editaOs.php" method="GET">
                    <table class="tabela">
                    <thead>
                        <tr>
                            <th>Id OS</th>
                            <th>Status OS</th>
                            <th>Ultima Atualização</th>
                            <th>Data Inclusão</th>
                            <th>Status Faturamento</th>
                            <th>Descrição Equipamento</th>
                            <th>Defeito Apresentado</th>
                            <th>Valor OS</th>
                            <th>Visualiza OS</th>
                        </tr>
                    </thead>
                        <tbody>
                                    <tr>
                                    <td><?php echo $registro ['id_os'];?></td>
                                    <td><?php echo $registro ['status_os'];?></td>
                                    <td><?php echo $registro ['dt_atualizacao'];?></td>
                                    <td><?php echo $registro ['dt_inclusao'];?></td>
                                    <td><?php echo $registro ['status_faturamento'];?></td>
                                    <td><?php echo $registro ['desc_equipamento'];?></td>
                                    <td><?php echo $registro ['desc_def_cliente'];?></td>
                                    <td><?php echo $registro ['valor'];?></td>
                                    <td><a href="visualizaOs.php?id=<?php echo $registro['id_os'];?>">Visualizar</a></td>
                                   </tr><?php
                        }
                    ?>
                 </tbody>
                 </table>
            </form>
    </div>
</body>
<?php include "estrutura/rodape.php";?>
</html>
