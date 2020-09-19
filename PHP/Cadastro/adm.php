<?php
include_once("../conexao.php");
session_start();
error_reporting(0);

//verificação se ja exite
$sql="SELECT * FROM dados where cpf=".$_POST["cpf"];
$sql1="SELECT * FROM login where login=".$_POST["login"];
$result= mysqli_query($conexao, $sql);
$result1= mysqli_query($conexao, $sql1);
$row = mysqli_num_rows($result);
$row1 = mysqli_num_rows($result1);

//se existir um no banco de dados, se exitir irá retornar para a pagina de cadastro
if($row == 1){
    $_SESSION['cpfCasd']=true;
    if($row1 ==1){
        $_SESSION['loginCasd']=true;
        header("location: ../../cadastrar.php");
        exit();
    }
    header("location: ../../cadastrar.php");
    exit();
}
//se não exitir, irá verificar se ta vaziu ou não
else{
    //verificação se está com os campus estão vazius
    if (empty($_POST["nome"])|| empty($_POST["cpf"])) {
        header("location: ../../cadastrar.php");
        $_SESSION['VaziuADM']=true;
        exit(); 
    }
    if(empty($_POST["funcao"]) || empty($_POST["login"])){   
        header("location: ../../cadastrar.php");
        $_SESSION['VaziuADM']=true;
        exit();
    }
    if(empty($_POST["senha"])){
        header("location: ../../cadastrar.php");
        $_SESSION['VaziuADM']=true;
        exit();
    }
    // se não estiver vaziu vai adicionar
    else{
        $login=$_POST["login"];
        $senha=$_POST['senha'];
        $nome=$_POST['nome'];
        $cpf=$_POST['cpf'];
        $funcao=$_POST['funcao'];
        $sql1="INSERT INTO login (login,senha,funcao) VALUES ('".$login."',md5('".$senha."'),'ADM')";
        $sql2="INSERT INTO dados (login, senha, nome, cpf, funcao) VALUES ('".$login."', md5('".$senha."'), '".$nome."', '".$cpf."', '".$funcao."')";
        //primeira conexão para adicionar no primeiro banco de dado
        if($conexao=mysqli_query($conexao, $sql1)){
             echo "deu certo"; 
        }else {
            echo "erro";
            die( mysqli_error( $conexao ) );
        }
        ////segunda conexão para adicionar no segundo banco de dado
        if($conexao1=mysqli_query($conexao1, $sql2)){
             echo "deu certo"; 
        }else {
            echo "erro";
            die( mysqli_error( $conexao ) );
        } 
        header("location: ../../cadastrar.php");
        exit();

    }
}
