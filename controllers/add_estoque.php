<?php
require_once("conect.php");
// Se o formulário para adicionar estoque for enviado
if (isset($_POST['nome_produto'])) {
    $nome_produto = $_POST['nome_produto'];
    $quantidade_produto = $_POST['quantidade_produto'];
    $custo_produto = $_POST['custo_produto'];

    $sql = "INSERT INTO estoque (Nome_do_produto, Quantidade_do_produto, Custo_do_produto)
            VALUES ('$nome_produto', '$quantidade_produto', '$custo_produto')";

    if ($conn->query($sql) == TRUE) {
        $_SESSION['feedback']='Item Adicionado com Sucesso';
        $_SESSION['status']='ok';
    } else {
        $_SESSION['feedback']="Erro ao adicionar produto ao estoque: " . $conn->error;
    }
}
// Fecha a conexão com o banco de dados
$conn->close();
header("Location:../pages/form_estoque.php");
?>