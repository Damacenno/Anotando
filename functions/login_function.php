<?php
require_once('functions_usuarios.php');
require_once('../conexao.php');

// ---Login--------------
if (isset($_POST["login_senha"]) && isset($_POST["login_email"])) {
    $email = $_POST["login_email"];
    $login_senha = $_POST["login_senha"];
    $login = loginUsuario($conn, $email, $login_senha);

    if ($login === true) {
        header("Location: ../dashboard.php");
    } else {
        header("Location:../index.php?login_sucesso=false");
    }
}
//---cadastro--------------
if (isset($_POST["cadastro_senha"]) && isset($_POST["cadastro_email"])) {
    $cadastro_nome = $_POST["cadastro_nome"];
    $cadastro_senha = $_POST["cadastro_senha"];
    $cadastro_email = $_POST["cadastro_email"];
    $cadastro = criarUsuario($conn, $cadastro_nome, $cadastro_email, $cadastro_senha);
    if ($cadastro !== false) {
        header("Location:../index.php?cadastro_sucesso=true");

    } else {
        header("Location:../index.php?cadastro_sucesso=false");

    }

}
?>