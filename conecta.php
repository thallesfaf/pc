<meta charset="UTF-8">
<?php
   $servidor = "localhost";
   $usuarioBD = "root";
   $senhaBD = "senha5";
   $banco = "projeto";
   $conecta = mysqli_connect($servidor, $usuarioBD, $senhaBD, $banco) or die("Impossivel conectar com com o banco e dados!");
    		  mysqli_select_db($conecta, "projeto") or die("Banco inexistente!");
?>