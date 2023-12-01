<?php
function enviarMensagem($conn, $grupo_id, $usuario_id, $mensagem)
{
    if ($conn->connect_error) 
    {
        die("Conexão falhou: " . $conn->connect_error);
    }
    $sql = "INSERT INTO Mensagens (grupo_id, usuario_id, mensagem) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iis", $grupo_id, $usuario_id, $mensagem);
    if ($stmt->execute()) 
    {
        return true;
    } else {
        return false;
    }

    $stmt->close();
    $conn->close();
}
function listarMensagens($conn, $grupo_id) 
{
    if ($conn->connect_error) 
    {
        die("Conexão falhou: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM mensagens WHERE grupo_id = ? ORDER BY data_envio asc";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $grupo_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $mensagens = array();

    while ($row = $result->fetch_assoc()) 
    {
        $mensagens[] = $row;
    }

    $stmt->close();
    $conn->close();
    return $mensagens;
}
function novasMensagens($conn, $grupoId, $ultimaMensagemId) 
{
        if ($conn->connect_error) 
        {
            die("Conexão falhou: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM mensagens WHERE grupo_id = ? AND mensagem_id > ? ORDER BY data_envio ASC";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $grupoId, $ultimaMensagemId);
        $stmt->execute();
        $result = $stmt->get_result();
        $novasMensagens = array();

        while ($row = $result->fetch_assoc()) 
        {
            $novasMensagens[] = $row;
        }

        $stmt->close();
        $conn->close();

        return $novasMensagens;
}
