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
    <?php include '../components/navbar.php' ; ?>
    <!-- /NavBar -->

    <!-- Container -->
    <div class="container pb-60 pt-60">
        <div class="row">
            <div class="col-lg-6">
                <div class="BorderCamp mb-20">
                    <h2 class="text-center Roboto cinza_primary pt-10 pb-10"><u>LOGIN</u></h2>
                    <form action="" method="">
                        <div class="form-group ml-20 mr-20">
                            <label for="login" class="Roboto cinza_primary">EMAIL</label>
                            <input type="text" class="form-control" id="login">
                        </div>
                        <div class="form-group ml-20 mr-20">
                            <label for="senha" class="Roboto cinza_primary">SENHA</label>
                            <input type="password" class="form-control" id="senha">
                        </div>
                        <button type="submit" class="btn btn-outline-success Roboto pl-20 pr-20 ml-20 mb-20">ENTRAR</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="BorderCamp mb-20">
                    <h2 class="text-center Roboto cinza_primary pt-10 pb-10"><u>CADASTRO</u></h2>
                    <form action="" method="">
                        <div class="form-group ml-20 mr-20">
                            <label for="login" class="Roboto cinza_primary">EMAIL</label>
                            <input type="text" class="form-control" id="login">
                        </div>
                        <div class="form-group ml-20 mr-20">
                            <label for="senha" class="Roboto cinza_primary">SENHA</label>
                            <input type="password" class="form-control" id="senha">
                        </div>
                        <div class="form-group ml-20 mr-20">
                            <input type="hidden" name="MAX_FILE_SIZE" value="4194304"  />
                            <input type="file" class="Roboto cinza_primary" />
                        </div>

                        <button type="submit" class="btn btn-outline-success Roboto pl-20 pr-20 ml-20 mb-20">CADASTRAR</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Container -->

    <!-- Footer -->
    <?php include '../components/footer.php' ; ?>
    <!-- /Footer -->

</body>

</html>