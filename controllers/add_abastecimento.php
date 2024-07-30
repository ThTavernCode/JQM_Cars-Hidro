<?php
require_once("conect.php");
// Se o formulário para adicionar abastecimento for enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_abastecimento'])) {
    $produto_comprado = $_POST['produto_comprado'];
    $custo_produto = $_POST['custo_produto'];
    $ultima_data_comprada = $_POST['ultima_data_comprada'];
    $data_compra = $_POST['data_compra'];

    $sql = "INSERT INTO abastecimento (Produto_Comprado, Custo_do_produto, Última_data_comprada, Data_da_compra)
            VALUES ('$produto_comprado', '$custo_produto', '$ultima_data_comprada', '$data_compra')";

    if ($conn->query($sql) === TRUE) {
        echo "<p>Abastecimento adicionado com sucesso!</p>";
    } else {
        echo "<p>Erro ao adicionar abastecimento: " . $conn->error . "</p>";
    }
}

// Fecha a conexão com o banco de dados
$conn->close();
?>