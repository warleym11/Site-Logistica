<!DOCTYPE html>
<html>
<head>
    <title>Registros de Cadastro</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "correios"; // Nome do banco de dados

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM cadastro";
    $stmt = $conn->query($sql);

    if ($stmt->rowCount() > 0) {
        echo "<table>";
        echo "<tr><th>Nome</th><th>CPF</th><th>Email</th><th>Senha</th></tr>";

        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row["nome"] . "</td>";
            echo "<td>" . $row["cpf"] . "</td>";
            echo "<td>" . $row["email"] . "</td>";
            echo "<td>" . $row["senha"] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Nenhum resultado encontrado";
    }
} catch(PDOException $e) {
    echo "Erro: " . $e->getMessage();
}

$conn = null;
?>

</body>
</html>
