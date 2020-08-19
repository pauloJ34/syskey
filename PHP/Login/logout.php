<?php 
session_start();
//sair de todas as sessões
session_destroy();
// voltar para a tela de login
header("location: ../../index.php")


?>