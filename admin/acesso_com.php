<?php
session_name('chuletaaa');
if (!isset($_SESSION)){
    session_start();
}
//segurança digital

//verificar se o usuario esta logado na sessão
if(!isset($_SESSION['nome_da_sessao'])
or ($_SESSION['nome_da_sessao']!= $nome_da_sessao)){
    session_destroy();
    header('location: login.php');
}

?>