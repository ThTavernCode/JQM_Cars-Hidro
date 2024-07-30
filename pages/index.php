<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Formulários de Lavagens e Clientes</title>
    <?php include_once('../components/header_links.php'); ?>
</head>

<body>

    <div class="container">
        <div class="row centro formulario">
            <div class="col-12">
            <h2 class="text-center text-dark py-2">Sistema de Gerenciamento</h2> 
            <hr>
                <div class="row d-flex justify-content-between">
                <div class="col-5 col-sm-12 border border-danger">
                    <a href="form_cliente.php" class="btn btn-jqm btn-lg w-100 my-2">Clientes</a>
                    <a href="form_estoque.php" class="btn btn-jqm btn-lg w-100 my-2">Estoque</a>
                    <a href="form_abastecimento.php" class="btn btn-jqm btn-lg w-100 my-2">Abastecimentos</a>
                    <a href="form_manutencao.php" class="btn btn-jqm btn-lg w-100 my-2">Manutenções</a>
                    <a href="form_lavagem.php" class="btn btn-jqm btn-lg w-100 my-2">Lavagens</a>
                </div>
                <div class="col-md-7 col-xl-1 mt-5">
                    <img class="img-fluid" src="../public/logo.jpg">
                </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>