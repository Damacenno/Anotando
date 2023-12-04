<?php 
require_once ("../conexao.php");
require_once ("functions_usuarios.php");

$id = $_SESSION['usuario']['usuario_id'];
$nome = $_POST['usuario-nome'];
$emailN = $_POST['usuario-email'];
$emailA = $_SESSION['usuario']['usuario_email'];
$genero = $_POST['usuario-genero'];
$antiga = $_POST['senhaA'];
$senha = $_POST['usuario-senha'];


$sql = "SELECT * FROM usuarios WHERE usuario_email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $emailA);

if ($stmt->execute()) {
    $result = $stmt->get_result();
    $stmt->close();

    if ($result->num_rows >= 1) {
        $row = $result->fetch_assoc();
        $senha_hash = $row['usuario_senha'];
        if (password_verify($antiga, $senha_hash)) {
            $result = atualizarUsuario($conn, $id, $nome, $emailN, $genero, $senha);
            if($result){
                echo "Atualizo";
                $res = loginUsuario($conn,$emailN,$senha);
                if ($res){
                    echo " E Logou";
                } else {
                    echo " Mas não logou";
                }
            } else {
                echo "Não deu nem p atualiza";
            }
            // echo "<script>console.log('A senha coincide')</script>";
        } else {
            echo "<script>console.log('A senha NÃO coincide')</script>";
        }
    } else {
        return false; // Nenhum usuário encontrado com o email fornecido
    }
}

?>