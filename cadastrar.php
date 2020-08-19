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
    
<!-- --------------------------------- -->

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
                    <legend> <strong> Adicionar usuário padrão</strong></legend>
                    <form action="PHP/Cadastro/pessoa.php" method="post">
                        <?php
                            if (isset($_SESSION['cpfCasd'])) {
                                echo '<p class="Erro">O CPF colocado ja está cadastrado</p>';
                                unset($_SESSION['cpfCasd']);
                            }
                            elseif (isset($_SESSION['loginCasd'])) {
                                echo '<p class="Erro">O Login já exite</p>';
                                unset($_SESSION['loginCasd']);
                            }
                            elseif(isset($_SESSION['vaziuPERS'])){
                                echo '<p class="Erro">Campo/s Váziu/s</p>';
                                unset($_SESSION['vaziuPERS']);
                            }
                        ?>
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
<!-- --------------------------------- -->
            <div id="sala">
                <fieldset>
                    <legend><strong>Adicionar Chave</strong></legend>
                    <form action="PHP/Cadastro/sala.php" method="post">
                        <?php
                            if (isset($_SESSION['cpfCasd'])) {
                                echo '<p class="Erro">Já exite esse número de chave</p>';
                                unset($_SESSION['cpfCasd']);
                            }
                            elseif (isset($_SESSION['VaziuSalas'])){
                                echo '<p class="Erro">Campo/s Váziu/s</p>';
                                unset($_SESSION['VaziuSalas']);
                            }
                        ?>
                        <p>NÚMERO DA CHAVE</p>
                        <input type="number" name="numero"><br>
                        <p>TIPO DE SALA</p><br>
                        <input type="radio" name="tipo" value="sala de aula" >SALA DE AULA <br> <br>
                        <input type="radio" name="tipo" value="laboratorio">LABORATÓRIO <br><br>
                        <input type="radio" name="tipo" value="vd">OUTRO: <input type="text" name="tipoo" class="outro" checked=true>
                        
                        <br><br><br>
                        <input type="submit" value="Enviar">
                    </form>
                </fieldset>   
            </div>
<!-- --------------------------------- -->
            <div id="adm">
                <fieldset>
                    <legend><strong>Adicionar usuário Administrador</strong></legend>
                    <form action="PHP/Cadastro/adm.php" method="post">
                        <?php
                            if (isset($_SESSION['cpfCasd'])) {
                                echo '<p class="Erro">O CPF colocado ja está cadastrado</p>';
                                unset($_SESSION['cpfCasd']);
                            }
                            elseif (isset($_SESSION['loginCasd'])) {
                                echo '<p class="Erro">O Login já exite</p>';
                                unset($_SESSION['loginCasd']);
                            }
                            elseif (isset($_SESSION['VaziuADM'])){
                                echo '<p class="Erro">Campo/s Váziu/s</p>';
                                unset($_SESSION['VaziuADM']);
                            }
                        ?>
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