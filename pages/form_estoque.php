<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Adicionar Produto ao Estoque</title>
    <?php require_once("../components/header_links.php"); ?>
    <script type="text/javascript" src="../public/feedback.js"></script></script>
</head>

<body>
    <div class="container py-2 mt-5">
        <div class="row">
            <div class="col-12 formulario pt-3 centro">
            <h3 class="text-center text-dark">Adicionar Novo Produto ao Estoque</h3>
                <form action="../controllers/add_estoque.php" method="POST" class="form-group p-2">
                    <label for="nome_produto">Nome do Produto:</label>
                    <input type="text" id="nome_produto" name="nome_produto" required class="form-control">

                    <label for="quantidade_produto">Quantidade do Produto:</label>
                    <input type="text" id="quantidade_produto" name="quantidade_produto" required class="form-control">

                    <label for="custo_produto">Custo do Produto (R$):</label>
                    <input type="number" id="custo_produto" name="custo_produto" step="0.01" required class="form-control">
                    <div class='mt-2' id='feedback'>
                        <?php if(isset($_SESSION['feedback'])){
                            echo "<p class='alert alert-secondary'>".$_SESSION['feedback']."</p>";
                            unset($_SESSION['feedback']);
                        } ?></div>
                    <hr>
                    <div class="col-12 align-middle p-2 d-flex justify-content-between">
                        <input type="submit" value="Adicionar Produto" class="btn btn-jqm col-7 my-auto py-4 btn-lg">
                        <a href="index.php" class="btn btn-jqm col-4 my-auto py-4 btn-lg">Voltar</a>
                    </div>

                </form>
            </div>
        </div>

    </div>
    <script type="text/javascript">
        apagaFeedBack("feedback", 2500);
    </script>
</body>

</html>