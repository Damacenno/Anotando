<?php
function criarGrupo($conn, $nome, $descricao, $criadorId) 
{
    $sql = "INSERT INTO grupos (grupo_nome,grupo_descricao, grupo_data_criacao) VALUES (?, ?, NOW())";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $nome, $descricao);

    if ($stmt->execute()) 
    {
        $grupoId = $stmt->insert_id;
        $stmt->close();
        
        // Associe o criador como membro do grupo
        adicionarAdminAoGrupo($conn, $criadorId, $grupoId);
    } else 
    {
     echo "erro"; 
    }
}
function listarGrupos($conn, $grupo_id = NULL) 
{
    $sql = "SELECT * FROM grupos WHERE 1 = 1";

    if (!empty($grupo_id)) {
        $sql .= " AND grupo_id = ?";
    }

    $stmt = $conn->prepare($sql);

    if (!empty($grupo_id)) {
        $stmt->bind_param("i", $grupo_id);
    }

    $stmt->execute();
    
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $grupos = [];
        while ($row = $result->fetch_assoc()) {
            $grupos[] = $row;
        }
        return $grupos;
    } else {
        return [];
    }
}

 function adicionarAdminAoGrupo($conn, $usuarioId, $grupoId) 
{
            $sql = "INSERT INTO grupo_membros (usuario_id, grupo_id, grupo_nivel) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $grupoNivel = "adm"; // Supondo que "adm" seja o valor desejado para grupo_nivel
            $stmt->bind_param("iis", $usuarioId, $grupoId, $grupoNivel);
            return $stmt->execute();
}

function adicionarMembroAoGrupo($conn, $usuarioId, $grupoId) 
{
    $sql = "INSERT INTO grupo_membros (usuario_id, grupo_id) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $usuarioId, $grupoId);

    return $stmt->execute();
}

function listarGruposAdm($conn, $adm_id) 
{
    $sql = "SELECT *
            FROM grupos
            INNER JOIN grupo_membros ON grupos.grupo_id = grupo_membros.grupo_id
            WHERE grupo_membros.usuario_id = ?;";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $adm_id);
    $stmt->execute();

    $result = $stmt->get_result();
    $grupos = [];

    while ($row = $result->fetch_assoc()) {
        $grupos[] = $row;
    }

    return  $grupos;
}

function listarMembrosDoGrupo($conn, $grupoId) 
{
    $sql = "SELECT u.* FROM usuarios u
            INNER JOIN grupo_membros gm ON u.usuario_id = gm.usuario_id
            WHERE gm.grupo_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $grupoId);
    $stmt->execute();

    $result = $stmt->get_result();
    $membros = [];

    while ($row = $result->fetch_assoc()) {
        $membros[] = $row;
    }

    return $membros;
}
?>