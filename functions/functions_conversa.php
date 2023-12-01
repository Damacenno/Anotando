<?php
function criarConversa($usuario1_id, $usuario2_id)
{  
    $sql = "INSERT INTO Conversas (usuario1_id, usuario2_id) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $usuario1_id, $usuario2_id);

    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
    $stmt->close();
    $conn->close();
}

function listarConversas($usuario_id) 
{
    $sql = "SELECT * FROM Conversas WHERE usuario1_id = ? OR usuario2_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $usuario_id, $usuario_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $conversas = array();

    while ($row = $result->fetch_assoc()) {
        $conversas[] = $row;
    }

    $stmt->close();
    $conn->close();

    return $conversas;
}

// Função para atualizar informações de uma conversa (se necessário)
function atualizarConversa($conversa_id, $novo_valor)
{
    $sql = "UPDATE Conversas SET nome_coluna = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $novo_valor, $conversa_id);

    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }

    $stmt->close();
    $conn->close();
}

// Função para apagar uma conversa (se necessário)
function apagarConversa($conversa_id) 
{
    $sql = "DELETE FROM Conversas WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $conversa_id);

    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }

    $stmt->close();
    $conn->close();
}
?>