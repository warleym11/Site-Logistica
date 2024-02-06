<?php
include_once('conexao.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id']; // Recupera o ID do formulário
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $senha = $_POST['senha']; // Recupera a senha do formulário

    // Utilize prepared statements para evitar SQL injection
    $sqlUpdate = "UPDATE cadastro SET nome=?, cpf=?, email=?, senha=? WHERE id=?";
    $stmt = $conexao->prepare($sqlUpdate);
    $stmt->bind_param('ssssi', $nome, $cpf, $email, $senha, $id);

    if ($stmt->execute()) {
        header('Location: sistema.php'); // Redireciona para a página de lista após a atualização
    } else {
        echo "Erro ao atualizar registro: " . $stmt->error;
    }

    $stmt->close();
    $conexao->close();
}
?>
