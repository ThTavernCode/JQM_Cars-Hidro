<?php
require_once("conect.php");
// Se o formulário para adicionar manutenção for enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add_manutencao'])) {
    $servico = $_POST['servico'];
    $produto_gasto = $_POST['produto_gasto'];
    $qntd_produto_gasto = $_POST['qntd_produto_gasto'];
    $custo_produto = $_POST['custo_produto'];
    $custo_servico = $_POST['custo_servico'];

    $sql = "INSERT INTO manutencao (servico, produto_gasto, custo_do_produto, custo_do_servico)
            VALUES ('$servico', '$produto_gasto', '$qntd_produto_gasto', '$custo_produto', '$custo_servico')";

    if ($conn->query($sql) === TRUE) {
        echo "<p>Manutenção adicionada com sucesso!</p>";
    } else {
        echo "<p>Erro ao adicionar manutenção: " . $conn->error . "</p>";
    }
}
echo $servico,$produto_gasto,$qntd_produto_gasto;
// Fecha a conexão com o banco de dados
$conn->close();
?>