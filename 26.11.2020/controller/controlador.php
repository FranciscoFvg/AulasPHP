<?php

$usuarios = require('../database/bancodedados.php');

#Método $_POST e $_GET recebem requisições atraves de nomes
$email = $_POST['email'];
$senha = $_POST['senha'];

function voltarUsuarioParaLogin(){
    header('Location: ../index.php?mensagem=Usuario ou senha invalido!');
}

if (array_key_exists($email, $usuarios)) {
    
    if ($usuarios[$email]['senha'] == $senha) {
        #função que devolve cabeçaçho para execução, redirecionar para outro arquivo
        header('Location: ../view/painel.php');
    } else {
        voltarUsuarioParaLogin();
    }

} else {
    voltarUsuarioParaLogin();
}