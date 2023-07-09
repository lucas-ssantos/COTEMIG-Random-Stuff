<?php
require_once '../components/modal_insert.php';
require_once '../components/modal_delete.php';
require_once '../components/modal_update.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dream Games</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <link rel="stylesheet" href="../css/home_screen_style.css" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

    <!-- NavBar -->
    <?php include '../components/navbar.php'; ?>
    <!-- /NavBar -->

    <!-- Container -->
    <div class="container pb-60 pt-60 text-center">
        <div class="row mb-20">
            <div class="col-lg">
                <h2 class="Roboto cinza_primary">O quê deseja fazer?</h2>
            </div>
        </div>
        <div class="row mb-20">
            <div class="col-lg-4">
                <button type="button" class="btn btn-success Roboto white mb-10" data-toggle="modal" data-target="#ModalInsert">INSERIR PRODUTO</button>
            </div>
            <div class="col-lg-4">
                <button type="button" class="btn btn-danger Roboto white mb-10" data-toggle="modal" data-target="#ModalDelete">DELETAR PRODUTO</button>
            </div>
            <div class="col-lg-4">
                <button type="button" class="btn btn-warning Roboto white mb-10" data-toggle="modal" data-target="#ModalUpdate">ATUALIZAR PRODUTO</button>
            </div>
        </div>
        <div class="row">
            <div class="col-lg">
                <div class="table-responsive-sm">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th>Código de Barras</th>
                                <th>Nome</th>
                                <th>Preço de Compra</th>
                                <th>Preço de Venda</th>
                                <th>Quantidade no Estoque</th>
                                <th>Volume</th>
                                <th>Unid. de Medida</th>
                                <th>Foto</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                                <td>test</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /Container -->

    <!-- Footer -->
    <?php include '../components/footer.php'; ?>
    <!-- /Footer -->

</body>

</html>