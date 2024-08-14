<?php
require_once("conect.php");
// Coleta os dados do formulário
$nome_cliente = $_POST['nome_cliente'];
$preco_lavagem = $_POST['preco_lavagem'];
$desconto = $_POST['desconto'];
$forma_pagamento = $_POST['forma_pagamento'];
$produtos_gastos = $_POST['produtos_gastos'];
$quantidade_produtos = $_POST['quantidade_produtos'];
$data_lavagem = $_POST['data_lavagem'];

// Prepara e executa a query SQL para inserir os dados na tabela de lavagens
$sql = "INSERT INTO lavagens (Nome_Cliente, Preço_da_lavagem, Desconto, Forma_de_pagamento, Produtos_Gastos, Quantidade_gasta_de_produtos, Data_da_lavagem)
        VALUES ('$nome_cliente', '$preco_lavagem', '$desconto', '$forma_pagamento', '$produtos_gastos', '$quantidade_produtos', '$data_lavagem')";

if ($conn->query($sql) == TRUE) {
    $_SESSION['feedback']='Lavagem adicionada com sucesso!';
    $_SESSION['status']='ok';
} else {
    $_SESSION['feedback']="Erro ao adicionar lavagem: " . $conn->error;
}
// Fecha a conexão com o banco de dados
$conn->close();
header("Location:../pages/form_lavagem.php");

