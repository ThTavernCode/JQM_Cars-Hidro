<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Formulários de Lavagens e Clientes</title>
    <?php include_once('../components/header_links.php'); ?>
</head>

<body>

    <div class="container py-2 my-auto">
        <div class="row">
            <div class="col-12 formulario pt-3 centro">
                <form action="../controllers/add_lavagem.php" method="POST" class="form-group p-2">
                <h2 class="text-center text-dark">Adicionar Nova Lavagem</h2>
                    <label for="nome_cliente_lavagem">Nome do Cliente:</label>
                    <input type="text" id="nome_cliente_lavagem" name="nome_cliente" required class="form-control">

                    <label for="preco_lavagem">Preço da Lavagem (R$):</label>
                    <input type="number" id="preco_lavagem" name="preco_lavagem" step="0.01" required class="form-control">

                    <label for="desconto">Desconto (%):</label>
                    <input type="number" id="desconto" name="desconto" step="0.01" required class="form-control">

                    Forma de pagamento:<br>
                    <label alt="Pix" class="btn btn-jqm text-left mt-2 d-inline-block p-2 form-control"><input type="radio" value="pix" class="my-auto radio" name="forma_pagamento">Pix</label>
                    <label alt="Pix" class="btn btn-jqm text-left mb-3 d-inline-block p-2 form-control my-auto"><input type="radio" value="dinheiro" class="my-auto radio" name="forma_pagamento">Dinheiro</label>

                    <label for="produtos_gastos">Produtos Gastos:</label>
                    <input type="text" id="produtos_gastos" name="produtos_gastos" required class="form-control">

                    <label for="quantidade_produtos">Quantidade Gasta de Produtos:</label>
                    <input type="text" id="quantidade_produtos" name="quantidade_produtos" required class="form-control">

                    <label for="data_lavagem">Data da Lavagem:</label>
                    <input type="date" id="data_lavagem" name="data_lavagem" required class="form-control">
                    <div class='mt-2' id='feedback'>
                        <?php 
                        if(isset($_SESSION['feedback'])) {
                           if($_SESSION['status']=='ok'){echo "<p class='alert alert-success'>" . $_SESSION['feedback'] . "</p>";} else {echo "<p class='alert alert-danger'>" . $_SESSION['feedback'] . "</p>";}
                            unset($_SESSION['feedback']);
                        } 
                        ?>
                    </div>
                    <hr>

                    <div class="col-12 align-middle p-2 d-flex justify-content-between">
                        <input type="submit" value="Adicionar Lavagem" class="btn btn-jqm col-6 my-auto py-4 btn-lg">
                        <a href="index.php" class="btn btn-jqm col-5 my-auto py-4 btn-lg">Voltar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        <?php include_once("../public/feedback.js"); ?>
            apagaFeedBack('feedback', 2700);
    </script>

</body>

</html>