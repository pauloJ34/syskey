<!DOCTYPE html>
<?php 
error_reporting(0);
session_start();
if($_SESSION["matricula"]){
    header("location: main.php");
    exit();
}

?>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
        <link rel="stylesheet" href="CSS/index.css">  
        <title>SYSKEY</title>
    </head>
    <body>
        <!-- --------------------------------------------- -->
        
        <!-- --------------------------------------------- -->
        <main>
            <div class="cadastrar">
                <?php 
                if(isset($_SESSION["não_autenticado"])){
                    echo '<div class="notifica_erro">';
                    echo '<p>ERRO: Usúario ou Senha Inválidos.</p>';
                    echo '</div>';
                    unset($_SESSION["não_autenticado"]);
                }
                elseif (isset($_SESSION["vaziu"])) {
                    echo '<div class="notifica_erro">';
                    echo ' <p>ERRO: Todos os campus vazio</p>';
                    echo '</div>';
                    unset($_SESSION["não_autenticado"]);
                }
                ?>
                <form action="PHP/Login/login.php" method="POST">
                    <input type="text" name="matricula" placeholder="Matrícula"><br>
                    <input type="password" name="senha" placeholder="Senha"><br><br>
                    <input type="submit" value="Entrar">
                </form>
            </div>
        </main>
    </body>
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="javascript/funcionMain.js"></script>
</html>