<?php
if (isset($_GET['id'])) {
    $contatoId = $_GET['id'];

    // Consulta o banco de dados para buscar informações do contato
    $sql = "SELECT * FROM contatos WHERE id =    $contatoId ";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $contatoId);
    $stmt->execute();
    $result = $stmt->get_result();
    $contato = $result->fetch_assoc();
    $stmt->close();
    $conn->close();

    // Envie os dados do contato como resposta JSON
    header('Content-Type: application/json');
    echo json_encode($contato);
} else {
    http_response_code(400); // Bad Request
    echo json_encode(['error' => 'ID do contato não fornecido']);
}
?>
