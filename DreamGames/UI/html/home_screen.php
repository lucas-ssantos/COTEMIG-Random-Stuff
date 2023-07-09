<?php
require_once '../components/modal_produto.php';
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
    <div class="container pb-60 pt-60">
        <div class="row">
            <div class="col-lg-4 pb-20">
                <div class="BorderCamp">
                    <h2 class="text-center Roboto cinza_primary pt-10 pb-10">FILTROS</h2>
                    <ul class="list-unstyled">
                        <ul>
                            <a href="">
                                <li class="Roboto cinza_primary mb-20">RPG</li>
                            </a>
                            <a href="">
                                <li class="Roboto cinza_primary  mb-20">JOGOS DE AZAR</li>
                            </a>
                            <a href="">
                                <li class="Roboto cinza_primary mb-20">TABULEIRO</li>
                            </a>
                            <a href="">
                                <li class="Roboto cinza_primary  mb-20">PC</li>
                            </a>
                            <a href="">
                                <li class="Roboto cinza_primary mb-20">PS4</li>
                            </a>
                            <a href="">
                                <li class="Roboto cinza_primary  mb-20">PS3</li>
                            </a>
                        </ul>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6 pb-20" align="center">
                        <div class="card" style="width: 18rem; border-radius: 25px">
                            <img src="../../assets/img/dados_temp.png" class="card-img-top BorderTopRight BorderTopLeft">
                            <div class="card-body">
                                <h5 class="card-title Roboto cinza_primary">Card title</h5>
                                <p class="card-text Roboto cinza_primary">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary Roboto" data-toggle="modal" data-target="#myModal">COMPRAR</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pb-20" align="center">
                        <div class="card" style="width: 18rem; border-radius: 25px">
                            <img src="../../assets/img/dados_temp.png" class="card-img-top BorderTopRight BorderTopLeft">
                            <div class="card-body">
                                <h5 class="card-title Roboto cinza_primary">Card title</h5>
                                <p class="card-text Roboto cinza_primary">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary Roboto">COMPRAR</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pb-20" align="center">
                        <div class="card" style="width: 18rem; border-radius: 25px">
                            <img src="../../assets/img/dados_temp.png" class="card-img-top BorderTopRight BorderTopLeft">
                            <div class="card-body">
                                <h5 class="card-title Roboto cinza_primary">Card title</h5>
                                <p class="card-text Roboto cinza_primary">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary Roboto">COMPRAR</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 pb-20" align="center">
                        <div class="card" style="width: 18rem; border-radius: 25px">
                            <img src="../../assets/img/dados_temp.png" class="card-img-top BorderTopRight BorderTopLeft">
                            <div class="card-body">
                                <h5 class="card-title Roboto cinza_primary">Card title</h5>
                                <p class="card-text Roboto cinza_primary">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary Roboto">COMPRAR</a>
                            </div>
                        </div>
                    </div>
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