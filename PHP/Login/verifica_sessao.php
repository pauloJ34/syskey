<?php 
//session_start();
if(!$_SESSION["matricula"]){//verificar se tem uma seção aberta
	header("location: index.php");
	exit();
}

