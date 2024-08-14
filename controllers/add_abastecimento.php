<?php
session_start();
require_once("conect.php");
// Se o formulário para adicionar abastecimento for enviado
if (isset($_POST['produto_comprado'])) {
    $produto_comprado = $_POST['produto_comprado'];
    $custo_produto = $_POST['custo_produto'];
    $ultima_data_comprada = $_POST['ultima_data_comprada'];
    $data_compra = $_POST['data_compra'];

    $sql = "INSERT INTO abastecimento (Produto_Comprado, Custo_do_produto, ÚLtima_data_comprada, Data_da_compra)
            VALUES ('$produto_comprado', '$custo_produto', '$ultima_data_comprada', '$data_compra')";

    if ($conn->query($sql) == TRUE) {
        $_SESSION['feedback']="Abastecimento adicionado com sucesso";
        $_SESSION['status']='ok';
    }else{
        $_SESSION['feedback']="Erro ao adicionar abastecimento: " . $conn->error;  
    }
}
// Fecha a conexão com o banco de dados
$conn->close();
header("Location:../pages/form_abastecimento.php");
?>