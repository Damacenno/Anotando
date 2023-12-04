<?php
session_start();

function deslogar()
{
    header("Location: index.php");
    session_destroy();
}

function loginUsuario($conn, $email, $senha)
{
    $sql = "SELECT * FROM usuarios WHERE usuario_email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        $stmt->close();

        if ($result->num_rows >= 1) {
            $row = $result->fetch_assoc();
            $senha_hash = $row['usuario_senha'];
            if (password_verify($senha, $senha_hash)) {
                $_SESSION["usuario"] =
                    [
                        'usuario_id' => $row['usuario_id'],
                        'usuario_nome' => $row['usuario_nome'],
                        'usuario_email' => $row['usuario_email'],
                        'usuario_genero' => $row['usuario_genero'],
                    ];
                return true;
            } else {
                return false;
            }
        } else {
            return false; // Nenhum usuário encontrado com o email fornecido
        }
    }
}

function criarUsuario($conn, $nome = null, $email = null, $senha = null)
{

    $sql = "SELECT COUNT(*) FROM usuarios WHERE usuario_email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);

    $count = null;
    if ($stmt->execute()) {
        $stmt->store_result();
        $stmt->bind_result($count);
        $stmt->fetch();
        $stmt->close();

        if ($count > 0) {
            echo "O email já existe no banco de dados.";
            return false; // Email já existe, não é possível criar o usuário
        }
    } else {
        $stmt->close();
        echo "Erro na consulta: " . mysqli_error($conn);
        return false; // Falha na consulta
    }
    // Se o email não existir, prossiga com a criação do usuário
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
    $sql = "INSERT INTO usuarios (usuario_nome, usuario_email, usuario_senha) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $nome, $email, $senhaHash);

    if ($stmt->execute()) {
        $stmt->close();
        $conn->close();
        return true; // Sucesso ao criar o usuário
    } else {
        $error_message = mysqli_error($conn);
        $stmt->close();
        $conn->close();
        echo "Erro na inserção: " . $error_message; // Retornar mensagem de erro
        return false; // Falha na criação do usuário
    }
}

function atualizarUsuario($conn, $id, $nome, $email, $genero,$senha)
{
    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
    // Hash da senha
    $sql = "UPDATE Usuarios SET usuario_nome=?, usuario_email=?, usuario_senha=?, usuario_genero=? WHERE usuario_id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssi", $nome, $email,$senhaHash,$genero, $id);
    if ($stmt->execute()) {
        $stmt->close();
        return true; // Sucesso ao atualizar o usuário
    } else {
        $stmt->close();
        $conn->close();
        return false; // Falha ao atualizar o usuário
    }
}

function apagarUsuario($conn, $id)
{
    $sql = "DELETE FROM Usuarios WHERE usuario_id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        $stmt->close();
        $conn->close();
        return true; // Sucesso ao apagar o usuário
    } else {
        $stmt->close();
        $conn->close();
        return false; // Falha ao apagar o usuário
    }
}
