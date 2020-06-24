<?php
    define("HOST","127.0.0.1");
    define("USER","root");
    define("SENHA", "");
    define("BD", "syskey");
    //criar conexão
    //$conn = new mysqli($servidor,$usuario,$senha,$bancoDeDadosName)

    /*if($conn -> connect_errno){
        echo "Falha na coneção: (".$conn -> connect_errno.") ".$conn -> connect_error;
    }*/
    $conexao=mysqli_connect(HOST,USER,SENHA,BD) or die ("Não é possivel conectar");  
    mysqli_set_charset($conexao,"utf8");


?>