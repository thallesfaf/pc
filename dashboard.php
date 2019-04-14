<html>
<head>
<meta charset="utf-8">
<?php include "conecta.php"; ?>
</head>
<body>

             <h3><b>Dashboard</b></h3>
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <div id="espaco"></div>
    <div id="divCentral">
             <div id="espaco"></div>                
                    <table class="tabela">
                    <thead>
                        <tr>
                            <th>Orçamento Pendente</th>
                            <th>Reparo Pendente</th>
                            <th>Autorização Pendente</th>
                            <th>Autorizado</th>
                            <th>Reparo Concluido</th>
                            <th>Faturado</th>
                            <th>Faturamento Pendente</th>
                        </tr>
                    </thead>
                     <tbody>

                    <?php  
                           $sql="select distinct
                            (select count(id_os) from os where status_os = 'Orçamento Pendente') as orcamento_pendente,
                            (select count(id_os) from os where status_os = 'Reparo Pendente') as reparo_pendente,
                            (select count(id_os) from os where status_os = 'Autorizacao Pendente') as autorizacao_pendente,
                            (select count(id_os) from os where status_os = 'Autorizado') as autorizado,
                            (select count(id_os) from os where status_os = 'Concluido') as concluido,
                            (select count(id_os) from os where status_faturamento = 'Faturado') as faturado,
                            (select count(id_os) from os where status_faturamento = 'Faturamento Pendente') as faturamento_pendente
                            from os";
                            
                            $resultado = mysqli_query($conecta,$sql);
                            $linhas = mysqli_num_rows ($resultado);
                            for($i = 0 ; $i < $linhas; $i++){
                                $registro = mysqli_fetch_array($resultado);

                        ?>  
                                    <tr>
                                    <td><?php echo $registro ['orcamento_pendente'];?></td>
                                    <td><?php echo $registro ['reparo_pendente'];?></td>
                                    <td><?php echo $registro ['autorizacao_pendente'];?></td>
                                    <td><?php echo $registro ['autorizado'];?></td>
                                    <td><?php echo $registro ['concluido'];?></td>
                                    <td><?php echo $registro ['faturado'];?></td>
                                    <td><?php echo $registro ['faturamento_pendente'];?></td>

                                   </tr><?php
                        }
                    ?>
        
                 </tbody>
                 </table>
            </form>
    </div>
</body>

