<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Adicionar Abastecimento</title>
    <?php include('../components/header_links.php'); ?>
</head>

<body>
    <div class="container py-2 m-5">
        <h2 class="text-center text-light">Adicionar Abastecimento</h2>
        <div class="row">
            <div class="col-12 formulario pt-3 centro">
                <form action="routers/add_abastecimento.php" method="POST" class="form-group p-2">
                    <label for="produto_comprado" class="mt-2">Produto Comprado:</label>
                    <input type="text" id="produto_comprado" name="produto_comprado" required class="form-control">

                    <label for="custo_produto" class="mt-2">Custo do Produto (R$):</label>
                    <input type="number" id="custo_produto" name="custo_produto" step="0.01" required class="form-control">

                    <label for="ultima_data_comprada">Última Data Comprada:</label>
                    <input type="date" id="ultima_data_comprada" name="ultima_data_comprada" required class="form-control">

                    <label for="data_compra">Data da Compra:</label>
                    <input type="date" id="data_compra" name="data_compra" required class="form-control">

                    <hr>

                    <div class="col-12 align-middle p-2 d-flex justify-content-between">
                        <input type="button" value="Adicionar Abastecimento" class="btn btn-jqm col-7 my-auto py-4 btn-lg">
                        <a href="index.php" class="btn btn-jqm col-4 my-auto py-4 btn-lg">Voltar</a>
                    </div>

                </form>
            </div>
        </div>
    </div>

</body>

</html>