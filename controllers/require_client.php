<?php
require_once("conect.php");
// Se o formulário para adicionar cliente for enviado
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nome_cliente'])) {
    $nome_cliente = $_POST['nome_cliente'];
    $telefone_celular = $_POST['telefone_celular'];
    $endereco = $_POST['endereco'];
    $modelo_carro = $_POST['modelo_carro'];
    $marca_carro = $_POST['marca_carro'];
    $ano_carro = $_POST['ano_carro'];
    $placa = $_POST['placa'];

    $sql = "INSERT INTO clientes (Nome_Clientes, Telefone_Celular, Endereço, Modelo_do_carro, Marca_do_carro, Ano_do_carro, Placa)
            VALUES ('$nome_cliente', '$telefone_celular', '$endereco', '$modelo_carro', '$marca_carro', '$ano_carro', '$placa')";

    if ($conn->query($sql) == TRUE) {
        $_SESSION['feedback']='Cliente Adicionado com Sucesso!';
        $_SESSION['status']='ok';
    } else {
    $_SESSION['feedback']='Erro ao adicionar cliente: ' . $conn->error;
    }
}


// Fecha a conexão com o banco de dados
$conn->close();
header("Location:../pages/form_cliente.php");
?>