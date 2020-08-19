<?php 
session_start();
include_once("../conexao.php");

//verificar se um ou os dois campus estão vazio
if(empty($_POST["matricula"]) || empty($_POST["senha"])) {
	$_SESSION['vazio']=true;
    header("location: ../../index.php");
    exit();
}
//proteçã de SQL inject
$usuario = mysqli_real_escape_string($conexao, $_POST['matricula']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

//verificação no banco de dado
$query="select id, login from login where login='{$usuario}' and senha=md5('{$senha}')";

$result= mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);


// se existir vai ser redirecionado para outra página
if($row == 1){
	$_SESSION['matricula'] = $usuario;
	$query1="select id, login,funcao from login where login='{$usuario}' and senha=md5('{$senha}') and funcao='ADM'";
	$result1= mysqli_query($conexao1, $query1);
	$row1 = mysqli_num_rows($result1);
	unset($_SESSION["não_autenticado"]);
	unset($_SESSION["vazio"]);
	header("location: ../../main.php");
}
elseif ($usuario == " " || $senha == " ") {
	# code...
	$_SESSION['vazio']=true;
	$_SESSION['não_autenticado']=false;
	header("location: ../../index.php");
    exit();

}
// se não voltarar para a pagina para efetuar login
else{
	$_SESSION['vazio']=false;
	$_SESSION['não_autenticado']=true;
	header("location: ../../index.php");
    exit();
}


?>