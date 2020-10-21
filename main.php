<!DOCTYPE html>
<?php 
session_start();
include_once("PHP/Login/verifica_sessao.php");
?>
<html lang="pt-br">
    <head>
        <link rel="shortcut icon" href="IMG/chave.png"/>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="CSS/main.css">  
        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
        <script src="javascript/funcionMain.js"></script>
        <title>SYSKEY</title>
    </head>
    <body>
        <nav>
            <h2 class="titulo">SYSKEY</h2> 
            <a href="PHP/Login/logout.php" class= "paginas">Sair</a>
            <?php 
            //se for um ADM vai aparecer para "cadastrar"
                if($_SESSION["nao_adm"]):
            ?>
            <a href="cadastrar.php" class= "paginas">Cadastrar</a>
            <?php 
                endif;
                unset($_SESSION["não adm"]);
            //Fim da condição
            ?>
            <a href="#" class= "paginas">Inicio</a>
        </nav>
        <!-- --------------------------------- -->
        
        <main>
            <button class="btRecarregar">Atualizar</button>
            <table class="tabela" cellpadding=0>   
                <tr>    
                    <th>N° das Chaves</th>  
                    <th>Estado</th> 
                    <th>Usando</th> 
                    <th>Horários</th>
                    <th>Entregar</th>
                    <th>Agendar</th>   
                </tr>   
            </table>
        </main>
        
        <!-- -------------------------------- -->
    </body>
    
</html>