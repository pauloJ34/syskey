<?php
include_once("../conexao.php");
session_start();
error_reporting(0);


//verificação se ja exite
$sql="SELECT * FROM chaves where numero=".$_POST["numero"];
$result= mysqli_query($conexao, $sql);
$row = mysqli_num_rows($result);
$_SESSION['VaziuSalas']=false;
//se existir um no banco de dados, se exitir irá retornar para a pagina de cadastro
if($row == 1){
    $_SESSION['numCasd']=true;
    header("location: ../../cadastrar.php");
    exit();
}
//se não exitir, irá verificar se ta vaziu ou não
else{
    
    $nu=$_POST["numero"];
    $tipo=$_POST["tipo"];
    $tipoo=$_POST["tipoo"];
    //verificação se está com os campus estão vazius
    if($nu=="" || $tipo==""){
        header("location: ../../cadastrar.php");
        $_SESSION['VaziuSalas']=true;
        exit();
    }
    // se o "outro" estiver selecionado, vai pegar o valor do texto
    elseif($tipo=="vd"){
        $sql="INSERT INTO chaves (numero, estado, usuario, horario, tipo) VALUES ('".$nu."', 'livre', 'ninguem', '--:--/--:--', '".$tipoo."')";
        $conexao=mysqli_query($conexao, $sql);
        header("location: ../../cadastrar.php");
        exit();
    }
    // se tiver escolhido, vai pegar o valor da seleção
    else{
        $sql="INSERT INTO chaves (numero, estado, usuario, horario, tipo) VALUES ('".$nu."', 'livre', 'ninguem', '--:--/--:--', '".$tipo."')";
        $conexao=mysqli_query($conexao, $sql);
        header("location: ../../cadastrar.php");
        exit();
    }
}





?>