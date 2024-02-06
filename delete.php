<?php

if (!empty($_GET['id'])) {
    include_once('conexao.php');

    $id = $_GET['id'];
    
    // Use prepared statements para evitar injeção de SQL
    $sqlSelect = "SELECT * FROM cadastro WHERE id=?";
    $stmtSelect = $conexao->prepare($sqlSelect);
    $stmtSelect->bind_param("i", $id);
    $stmtSelect->execute();
    $resultSelect = $stmtSelect->get_result();

    if ($resultSelect->num_rows > 0) {
        // Use prepared statements para evitar injeção de SQL
        $sqldelete = "DELETE FROM cadastro WHERE id=?";
        $stmtDelete = $conexao->prepare($sqldelete);
        $stmtDelete->bind_param("i", $id);
        $stmtDelete->execute();
    }

    // Feche as declarações preparadas e a conexão
    $stmtSelect->close();
    $stmtDelete->close();
    $conexao->close();
}

header("Location: sistema.php");
?>
