<?php 
include_once("PHP/conexao.php");
//session_start();
if(!$_SESSION["matricula"]){//verificar se tem uma seção aberta
	header("location: index.php");
	exit();
}
//verificar se é ADM ou não
$sql="SELECT * FROM login where login='".$_SESSION['matricula']."' and funcao='ADM'";
$resultado = mysqli_query($conexao, $sql);
$row = mysqli_num_rows($resultado);
//se for ADM vai ativar a função que vai mostrar para cadastrar pessoas, ADM e chaves
if($row==1){
	$_SESSION["nao_adm"]=true;
}
// se não, não ativarar a função e não vai ter como cadastrar
else{
	$_SESSION["nao_adm"]=false;
}



?>
