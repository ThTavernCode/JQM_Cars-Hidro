<?php
require_once("../controllers/conect.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Adicionar Novo Cliente</title>
    <?php require_once("../components/header_links.php"); ?>
</head>

<body>
    <div class="container py-2 m-4">
        
        <div class="row">
            <div class="col-12 formulario pt-3 centro">
            <h2 class="text-center">Adicionar Novo Cliente</h2>
                <form action="routers/require_client.php" method="POST" class="form-group p-2">

                    <label for="nome_cliente_cliente">Nome do Cliente:</label>
                    <input type="text" id="nome_cliente_cliente" name="nome_cliente" required class="form-control">

                    <label for="telefone_celular">Telefone Celular:</label>
                    <input type="text" id="telefone_celular" name="telefone_celular" required class="form-control">

                    <label for="endereco">Endereço:</label>
                    <input type="text" id="endereco" name="endereco" required class="form-control">

                    <label for="modelo_carro">Modelo do Carro:</label>
                    <input type="text" id="modelo_carro" name="modelo_carro" required class="form-control">

                    <label for="marca_carro">Marca do Carro:</label>
                    <input type="text" id="marca_carro" name="marca_carro" required class="form-control">

                    <label for="ano_carro">Ano do Carro:</label>
                    <input type="number" id="ano_carro" name="ano_carro" min="1900" max="<? echo date('Y'); ?>" required class="form-control">

                    <label for="placa">Placa:</label>
                    <input type="text" id="placa" name="placa" required class="form-control">

                    <hr>

                    <div class="col-12 align-middle p-2 d-flex justify-content-between">
                        <input type="button" value="Adicionar Cliente" class="btn btn-jqm col-7 my-auto py-4">
                        <a href="index.php" class="btn btn-jqm col-4 my-auto py-4">Voltar</a>
                    </div>


                </form>
            </div>
        </div>
    </div>

</body>

</html>