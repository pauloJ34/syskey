<!DOCTYPE html>
<?php 
session_start();
include_once("PHP/Login/verifica_sessao.php");
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/main.css"> 
    <link rel="stylesheet" href="CSS/cadastrar.css">


    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.min.js"></script>
    <script src="javascript/painel.js"></script>
    <title>Cadastrar</title>
</head>
<body>
    <nav>
        <h2 class="titulo">SYSKEY</h2> 
        <a href="PHP/Login/logout.php" class= "paginas">Sair</a>
        <a href="cadastrar.php" class= "paginas">Cadastrar</a>
        <a href="main.php" class= "paginas">Inicio</a>
    </nav>
        <!-- --------------------------------- -->
    <main>
        <div class="caixaBT">
            <button class="btP">Cadastrar Pessoa</button>
            <button class="btS">Cadastrar Sala</button>
            <button class="btADM">Cadastrar Administrador</button>
        </div>

        <div class="caixa">
            <div id="pessoa">
                <fieldset>
                    <legend>Adicionar usuário padrão</legend>
                    <form action="PHP/Casdatro/pessoa.php" method="post">
                        <p>NOME</p>
                        <input type="text" name="nome"><br>
                        <P>CPF</P>
                        <input type="text" class="cpf" name="cpf"><br>
                        <P>FUNÇÃO</P>
                        <input type="text" name="funcao"><br>
                        <P>LOGIN</P>
                        <input type="text" name="login"><br>
                        <P>SENHA</P>
                        <input type="password" name="senha"><br><br><br>

                        <input type="submit" value="Enviar">
                    </form>
                </fieldset>   
            </div>

            <div id="sala">
                <fieldset>
                    <legend>Adicionar Chave</legend>
                    <form action="PHP/Casdatro/adm.php" method="post">
                        <p>NÚMERO DA CHAVE</p>
                        <input type="number" name="numero"><br><br><br>
                        <input type="submit" value="Enviar">
                    </form>
                </fieldset>   
            </div>

            <div id="adm">
                <fieldset>
                    <legend>Adicionar usuário Administrador</legend>
                    <form action="PHP/Casdatro/adm.php" method="post">
                        <p>NOME</p>
                        <input type="text" name="nome"><br>
                        <P>CPF</P>
                        <input type="text" class="cpf" name="cpf"><br>
                        <P>FUNÇÃO</P>
                        <input type="text" name="funcao"><br>
                        <P>LOGIN</P>
                        <input type="text" name="login"><br>
                        <P>SENHA</P>
                        <input type="password" name="senha"><br><br><br>

                        <input type="submit" value="Enviar">
                    </form>
                </fieldset>   
            </div>
        </div>
    
    </main>
    <!-- --------------------------------- -->
</body>


</html>