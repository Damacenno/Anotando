<?php
require("functions_grupo.php");
require_once('../conexao.php');

  // Coletar dados do formulário
    $nome_grupo = $_POST["nome_grupo"];
    $descricao = $_POST["descricao"];
    $criador_id = $_POST["criador_id"];
    $criarGrupo = criarGrupo($conn, $nome_grupo, $descricao, $criador_id);


if ($criarGrupo !== false) {
    // Grupo criado com sucesso, redirecione para main.php
    header("Location: ../paginas/main/main.php");
    exit(); // Certifique-se de sair após o redirecionamento
} else {
    echo "Erro ao criar o grupo";
}


?>