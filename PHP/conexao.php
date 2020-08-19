<?php
    define("HOST","127.0.0.1");
    define("USER","root");
    define("SENHA", "");
    define("BD", "syskey");
    //criar conexão
    //duas conexão para adicionar dois bancos de dados de uma vez
    $conexao=mysqli_connect(HOST,USER,SENHA,BD) or die ("Não é possivel conectar");  
    $conexao1=mysqli_connect(HOST,USER,SENHA,BD) or die ("Não é possivel conectar");
    mysqli_set_charset($conexao,"utf8");


?>