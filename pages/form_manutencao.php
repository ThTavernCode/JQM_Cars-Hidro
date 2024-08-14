<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Adicionar Manutenção</title>
    <?php include_once('../components/header_links.php'); ?>
</head>

<body>
    <div class="container py-2 m-5">

        <div class="row">
            <div class="col-12 formulario pt-3 centro">
                <h2 class="text-center text-dark">Adicionar Manutenção</h2>
                <form action="../controllers/add_manutencao.php" method="POST" class="form-group p-2">
                    <label for="servico">Serviço:</label>
                    <input type="text" id="servico" name="servico" required class="form-control">

                    <label for="produto_gasto">Produto Gasto:</label>
                    <input type="text" id="produto_gasto" name="produto_gasto" required class="form-control">

                    <label for="qntd_produto_gasto">Quantidade de Produto Gasto:</label>
                    <input type="text" id="qntd_produto_gasto" name="qntd_produto_gasto" required class="form-control">

                    <label for="custo_produto">Custo do Produto (R$):</label>
                    <input type="number" id="custo_produto" name="custo_produto" step="0.01" required class="form-control">

                    <label for="custo_servico">Custo do Serviço (R$):</label>
                    <input type="number" id="custo_servico" name="custo_servico" step="0.01" required class="form-control">
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
                        <input type="submit" value="Registrar Manutenção" class="btn btn-jqm col-7 my-auto py-4 btn-lg">
                        <a href="index.php" class="btn btn-jqm col-4 my-auto py-4 btn-lg">Voltar</a>
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