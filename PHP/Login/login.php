<?php 
session_start();
include_once("../conexao.php");


if(empty($_POST["matricula"]) || empty($_POST["senha"])) {
    header("location: ../../index.php");
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['matricula']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$query="select id, login from login where login='{$usuario}' and senha=md5('{$senha}')";

$result= mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);



if($row == 1){
	$_SESSION['matricula'] = $usuario;
	header("location: ../../main.php");
	exit();
}
else{
	$_SESSION['não_autenticado']=true;
	header("location: ../../index.php");
    exit();
}
?>