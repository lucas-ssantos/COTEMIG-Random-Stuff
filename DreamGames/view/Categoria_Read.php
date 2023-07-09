<html>
	<head>
		
		<title>Visualizar Categoria</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		
	</head>
	<body>
		<h2>Visualizar Categoria</h2>

			<div class="form-group">
				<label for="nome">Nome:</label>
				<input disabled type="text" class="form-control" id="nome" name="nome" value="<?= $categoria->getNome() ?>">
			</div>

			<div class="form-group">
				<label for="imagem">Imagem:</label>
				<input disabled type="text" class="form-control" id="imagem" name="imagem" value="<?=$categoria->getImagem()?>">
			</div>
	</body>
</html>
